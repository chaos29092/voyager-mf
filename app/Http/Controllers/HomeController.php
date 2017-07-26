<?php

namespace App\Http\Controllers;

//use App\Models\Product;
//use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Mail;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

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
        $category_id = 1;
        if (!Category::find($category_id)->parent_id){
            $posts = collect();
            $categories = Category::where('parent_id',$category_id)->get();
            foreach ($categories as $category){
                foreach ($category->posts()->get() as $post){
                    $posts = $posts->push($post);
                }
            }
        } else{
            $posts = Category::find($category_id)->posts;
        }
        return view('welcome',compact('posts'));
    }

//    public function product_category(ProductCategory $product_category)
//    {
//        $products = $product_category->products()->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->paginate(10);
//        return view('product_category',compact('product_category','products'));
//    }
//
//    public function product(Product $product)
//    {
//        $relate_products = ProductCategory::find($product->product_category_id)->products()->where('id', '<>', $product->id)->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
//        $category = ProductCategory::find($product->product_category_id);
//        return view('product',compact('product','relate_products','category'));
//    }

    public function page(Page $page)
    {
        return view('page',compact('page'));
    }

    public function post(Post $post)
    {
        return view('post',compact('post'));
    }

    public function news()
    {
        $category = Category::find(1);
        $posts = Category::find(1)->posts()->orderBy('updated_at', 'desc')->paginate(10);
        return view('post_category',compact('posts','category'));
    }

    public function tech()
    {
        $category = Category::find(2);
        $posts = Category::find(2)->posts()->orderBy('updated_at', 'desc')->paginate(10);
        return view('post_category',compact('posts','category'));
    }

    public function contact_us()
    {
        $page = Page::find(1);
        return view('contact_us',compact('page'));
    }

    public function about_us()
    {
        $page = Page::find(3);
        return view('page',compact('page'));
    }



//    public function categories()
//    {
//        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name')->get();
//        $products = Product::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name','category_pic')->paginate(12);
//
//        return view('categories',compact('categories','products')) ;
//    }
//
//    public function category($id)
//    {
//        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name')->get();
//        $products = Category::find($id)->products()->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name','category_pic')->paginate(12);
//        $category = Category::find($id);
//
//        return view('category',compact('categories','products','category'));
//    }
//
//    public function product_detail(Product $product)
//    {
//        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name')->get();
//        $category = $product->category;
//        $related_products = $category->products()->orderBy('sort', 'asc')->take(3)->select('id','name','category_pic')->get();
//
//        return view('product_detail',compact('categories','product','category','related_products'));
//    }
//    public function g_product_detail(GProduct $product)
//    {
//        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name')->get();
//        $category = $product->category;
//        $related_products = $category->products()->orderBy('sort', 'asc')->take(3)->select('id','name','category_pic')->get();
//
//        return view('product_detail',compact('categories','product','category','related_products'));
//    }
//
//    public function news_and_tech()
//    {
//        $articles = Page::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->paginate(10);
//        return view('news',compact('articles'));
//    }
//
//    public function news()
//    {
//        $articles = Page::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->where('tag','new')->paginate(10);
//        return view('news',compact('articles'));
//    }
//
//    public function tech()
//    {
//        $articles = Page::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->where('tag','tech')->paginate(10);
//        return view('news',compact('articles'));
//    }
//
//    public function new_detail(Page $page)
//    {
//        return view('new_detail',compact('page'));
//    }

}
