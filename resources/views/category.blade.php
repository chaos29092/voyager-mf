@extends('product_sidebar')
@section('title')
    @if(!$the_category->seo_title)
        {{$the_category->name}}
    @else
        {{$the_category->seo_title}}
    @endif
@endsection
@section('description')
    @if(!$the_category->meta_description)
        {{$the_category->excerpt}}
    @else
        {{$the_category->meta_description}}
    @endif
@endsection

@section('Crumbs')
    <li><a href="/products">Products</a></li>
@endsection
@section('pageName',$the_category->name)

@section('product_content')
    <div class="content-area col-md-9 col-sm-8 col-xs-12">
        <ul class="products row">
            @foreach($product_categories as $product_category)
                @foreach($products->where('product_category_id',$product_category->id) as $product)
                    <li class="product">
                        <a href="/products/{{$product_category->slug}}/{{$product->slug}}" title="{{$product->name}}">
                            <img alt="{{$product->name}}" src="/Storage/{{$product->image}}"/>
                            <h3>{{$product->name}}</h3>
                        </a>
                    </li>
                @endforeach
            @endforeach
        </ul>

        <nav class="ow-pagination">
            {{ $products->links() }}
        </nav>
    </div>
@endsection