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
                                <li><a href="/products/categories/{{$product_category->id}}">{{$product_category->name}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget-best-seller hidden-xs">
                            <div class="widget-title">
                                <h3>{{trans('home.rexiaochanpin')}}</h3>
                            </div>
                                <div class="seller-box">
                                    <div class="product-img"><a href="/products/20" title="{{trans('home.shiyanqifenlu')}}"><img src="{{asset('images/uploads/qifenlu.png')}}"
                                                                                              alt="{{trans('home.shiyanqifenlu')}}"/></a></div>
                                    <a href="/products/20"><h4>{{trans('home.shiyanqifenlu')}}</h4></a>
                                </div>
                            <div class="seller-box">
                                <div class="product-img"><a href="/products/47" title="{{trans('home.qifenbaohulu')}}"><img src="{{asset('images/uploads/qifrnbaohulu.png')}}"
                                                                                               alt="{{trans('home.qifenbaohulu')}}"/></a></div>
                                <a href="/products/47"><h4>{{trans('home.qifenbaohulu')}}</h4></a>
                            </div>

                                <div class="seller-box">
                                    <div class="product-img"><a href="/products/15" title="{{trans('home.zhenkongshaojielu')}}"><img src="{{asset('images/uploads/zhenkonglu.png')}}"
                                                                                              alt="{{trans('home.zhenkongshaojielu')}}"/></a></div>
                                    <a href="/products/15"><h4>{{trans('home.zhenkongshaojielu')}}</h4></a>
                                </div>
                                <div class="seller-box">
                                    <div class="product-img"><a href="/products/29" title="{{trans('home.gaozhenkongPECVD')}}"><img src="{{asset('images/uploads/pecvdhunqi.png')}}"
                                                                                              alt="{{trans('home.gaozhenkongPECVD')}}"/></a></div>
                                    <a href="/products/29"><h4>{{trans('home.gaozhenkongPECVD')}}</h4></a>
                                </div>
                            </aside>
                        </div>

                        @yield('product_content')
                    </div>
                </div>
            </div>
        </main>
    @endsection