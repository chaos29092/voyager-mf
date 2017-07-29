@extends('product_sidebar')
@section('title',trans('home.mafuluzhenkongludeng'))
@section('description',trans('home.mafuluzhenkongludeng'))

@section('pageName',trans('home.quanbuchanpin'))
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