@extends('product_sidebar')
@section('title')
    @if(!$product->seo_title)
        {{$product->name}}
    @else
        {{$product->seo_title}}
    @endif
@endsection
@section('description')
    @if(!$product->meta_description)
        {{$product->excerpt}}
    @else
        {{$product->meta_description}}
    @endif
@endsection

@section('Crumbs')
    <li><a href="/products">Products</a></li>
    <li><a href="/products/{{$product_category->slug}}">{{$product_category->name}}</a></li>
@endsection
@section('pageName')
    {{$product->name}}
@endsection

@section('product_content')
    <div class="content-area col-md-9 col-sm-8 col-xs-12">
        <div class="type-product product">
            <div class="images">
                <img src="/Storage/{{$product->image}}" alt="{{$product->name}}" />
            </div>
            <div class="summary entry-summary">
                <h1 class="product_title entry-title">{{$product->name}}</h1>

                <div class="product-content">
                    <p>{!! $product->excerpt !!}</p>
                </div>
                <a href="/contact_us"><button class="single_add_to_cart_button button alt" ><i class="icon_mail"></i>{{trans('home.lianxiwomen4')}}</button></a>

            </div>

            <!-- Tabs -->
            <div class="woocommerce-tabs wc-tabs-wrapper">
                <ul class="tabs wc-tabs">
                    <li class="description_tab active">
                        <a href="#tab-description">{{trans('home.zuopinxiangqing')}}</a>
                    </li>
                </ul>
                <div id="tab-description" class="panel entry-content wc-tab" style="display: block">
                    {!! $product->body !!}
                </div>
            </div>
            <!-- Tabs /- -->

            <!-- Related Product -->
            <div class="related-product">
                <h2>{{trans('home.xiangguanchanpin')}}</h2>
                <ul class="products row">
                    @foreach($related_products as $related_product)
                    <li class="product">
                        <a href="/products/{{$product_category->slug}}/{{$related_product->slug}}" title="{{$related_product->name}}">
                            <img alt="shop" src="/Storage/{{$related_product->image}}" />
                            <h3>{{$related_product->name}}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div><!-- Related Product /- -->
        </div>
    </div>
@endsection

{{--<table class="table" width="600">--}}
    {{--<tr class="success">--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr >--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr class="success">--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr class=>--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
    {{--<tr class="success">--}}
        {{--<td></td>--}}
        {{--<td></td>--}}
    {{--</tr>--}}
{{--</table>--}}