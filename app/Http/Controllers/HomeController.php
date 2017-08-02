<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::orderBy('order', 'desc')->orderBy('updated_at', 'desc')->get();
        return view('index',compact('product_categories'));
    }

    public function categories()
    {
        $product_categories = ProductCategory::orderBy('order', 'desc')->orderBy('updated_at', 'desc')->get();
        $products = Product::orderBy('featured', 'desc')->orderBy('updated_at', 'desc')->select('id','name','image','slug','product_category_id')->paginate(12);
        $featured_products = Product::whereFeatured(1)->take(5)->select('id','name','image','slug','product_category_id')->get();

        return view('categories',compact('product_categories','products','featured_products')) ;
    }

    public function category($category_slug)
    {
        $product_categories = ProductCategory::orderBy('order', 'desc')->orderBy('updated_at', 'desc')->get();
        $products = ProductCategory::whereSlug($category_slug)->firstOrFail()->products()->orderBy('featured', 'desc')->orderBy('updated_at', 'desc')->select('id','name','image','slug','product_category_id')->paginate(12);
        $featured_products = Product::whereFeatured(1)->take(5)->select('id','name','image','slug','product_category_id')->get();
        $the_category = ProductCategory::whereSlug($category_slug)->firstOrFail();

        return view('category',compact('product_categories','products','featured_products','the_category')) ;
    }

    public function product_detail($category_slug,$product_slug)
    {
        $product_categories = ProductCategory::orderBy('order', 'desc')->orderBy('updated_at', 'desc')->get();
        $product_category = ProductCategory::whereSlug($category_slug)->firstOrFail();
        $related_products = $product_category->products()->orderBy('featured', 'desc')->orderBy('updated_at', 'desc')->take(3)->select('id','name','image','slug')->get();
        $product = Product::whereSlug($product_slug)->firstOrFail();
        $featured_products = Product::whereFeatured(1)->take(5)->select('id','name','image','slug','product_category_id')->get();

        return view('product_detail',compact('product','product_categories','product_category','related_products','featured_products'));
    }

    public function news()
    {
        $category = Category::find(1);
        $posts = Category::find(1)->posts()->orderBy('updated_at', 'desc')->paginate(10);
        return view('posts',compact('posts','category'));
    }

    public function articles()
    {
        $category = Category::find(5);
        $posts = Category::find(5)->posts()->orderBy('updated_at', 'desc')->paginate(10);
        return view('posts',compact('posts','category'));
    }

    public function article($slug)
    {
        $category = Category::find(5);
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('post_detail',compact('post','category'));
    }

    public function page($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();
        return view('page',compact('page'));
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function custom_cases()
    {
        return view('custom_cases');
    }

    public function about_us()
    {
        $page = Page::find(3);
        return view('page',compact('page'));
    }
}
