@extends('master')
@section('title',trans('home.changguiluxing'))
@section('description',trans('home.kehuchangmailu'))

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>@yield('pageName')</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">{{trans('home.zhuye5')}}</a></li>
                    @yield('Crumbs')
                    <li class="active">@yield('pageName')</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->


        <div id="product-section" class="product-section container-fluid no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 widget-area">
                        <aside class="widget pro_widget_categories">
                            <div class="widget-title">
                                <h3>{{trans('home.chanpinfenlei')}}</h3>
                            </div>
                            <ul>
                                @foreach($product_categories as $product_category)
                                <li><a href="/products/{{$product_category->slug}}">{{$product_category->name}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget-best-seller hidden-xs">
                            <div class="widget-title">
                                <h3>{{trans('home.rexiaochanpin')}}</h3>
                            </div>
                            @foreach($product_categories as $product_category)
                                @foreach($featured_products->where('product_category_id',$product_category->id) as $featured_product)
                                    <div class="seller-box">
                                        <div class="product-img"><a href="/products/{{$product_category->slug}}/{{$featured_product->slug}}" title="{{$featured_product->name}}"><img src="/Storage/{{$featured_product->image}}" width="95px" height="108px"
                                                                                                                                     alt="{{$featured_product->name}}"/></a></div>
                                        <a href="/products/{{$product_category->slug}}/{{$featured_product->slug}}"><h4>{{$featured_product->name}}</h4></a>
                                    </div>
                                @endforeach
                            @endforeach
                            </aside>
                        </div>

                        @yield('product_content')
                    </div>
                </div>
            </div>
        </main>
    @endsection