@extends('master')
@section('title',trans('home.mafuluzhenkongludeng1'))
@section('description',trans('home.mafuluzhenkongludeng1'))

@section('content')
    <main class="site-main page-spacing">
        <!-- Slider Section -->
        <div id="slider-section" class="slider-section container-fluid no-padding">
            <div id="home-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <img src="images/uploads/banner5.png" alt="pecvd" width="1920" height="570"/>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="col-md-7 col-sm-8 col-xs-12 ow-pull-left">
                                    <h3 data-animation="animated bounceInDown">{{trans('home.huaxue')}}<span>{{trans('home.qixiangchenji')}}</span>{{trans('home.xitong')}}</h3>
                                    <br/>
                                    <p data-animation="animated bounceInDown">{{trans('home.cvdneirong')}}</p>

                                    <a href="/products/29" title="View More" data-animation="animated zoomInRight">{{trans('home.xiangxi')}}</a>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img src="images/uploads/ban34.png" alt="slide1" width="1920" height="570"/>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="col-md-7 col-sm-8 col-xs-12 ow-pull-right">

                                    <h3 data-animation="animated fadeInDown">{{trans('home.nuotaizhenkong')}}<span>{{trans('home.tuihuo')}}</span>
                                        {{trans('home.lu1')}}&nbsp;<span>{{trans('home.shaojie')}}</span>{{trans('home.lu2')}}</h3>
                                    <br/>
                                    <p data-animation="animated bounceInRight">{{trans('home.tuihuoluneirong')}}</p>
                                    <a href="/products/categories/3" title="View More" data-animation="animated zoomInUp">{{trans('home.xiangxi')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/uploads/bander1.png" alt="slide3" width="1920" height="570"/>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="col-md-7 col-sm-8 col-xs-12 ow-pull-right">

                                    <h3 data-animation="animated bounceInRight"><span>{{trans('home.wenkongqifenlu')}}</span></h3><br/>
                                    <p data-animation="animated bounceInLeft">{{trans('home.wenkongqifenluneirong')}}</p>
                                    <a href="/products/20" title="View More" data-animation="animated fadeInUp">{{trans('home.xiangxi')}}</a>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!-- Slider Section /- -->
        <!-- Introduction Section -->
        <div class="container introduction-section">
            <div class="row">
                @foreach($product_categories as $product_category)
                <div class="col-md-4 col-sm-6 col-xs-6 introdction-block">
                    <a href="/products/categories/{{$product_category->id}}"><img src="/Storage/{{$product_category->category_image}}" alt="{{$product_category->name}}" width="370" height="281"/></a>
                    <h3><a href="/products/categories/{{$product_category->id}}" title="{{$product_category->name}}">{{$product_category->name}}</a></h3>
                    <span>{{$product_category->excerpt}}</span>
                </div>
                @endforeach
            </div>
        </div><!-- Introduction Section /- -->

        <!-- Client Section -->
        <div class="container-fuild no-padding client-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <h3>{{trans('home.womendekehu')}}</h3>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <div class="client-logo-block">
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/zhejiang1.png')}}" alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/jiaotong.png')}}" alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/qinghua.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/hanguo.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/gelun.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/danpei.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/nuoding.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/xia.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/sichuan.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                            <div class="logg-box">
                                <img src="{{asset('images/uploads/hefeiyanjiuyuan1.png')}}"  alt="client" width="178" height="43"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Client Section /- -->

        <!-- AboutUs Section -->
        <div class="container aboutus-section">
            <div class="row">
                <div class="col-md-6 aboutus-image">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <img src="images/aboutus-1.jpg" alt="aboutus" width="290" height="380"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <img src="images/yanjiu2.png" alt="aboutus" width="290" height="380"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 aboutus-content">
                    <h3>{{trans('home.nuotaishebei')}}</h3>
                    <p>{{trans('home.nuotaishebeineirong')}}</p>
                    <div class="about-points">
                        <a href="/categories" title="{{trans('home.changguiluxing1')}}">{{trans('home.changguiluxing1')}}</a>
                        <a href="/custom_cases" title="{{trans('home.luxingdingzhi')}}">{{trans('home.luxingdingzhi')}}</a>
                        <a href="/about_us" title="{{trans('home.guanyuwomen')}}">{{trans('home.guanyuwomen')}}</a>
                        <a href="/contact_us" title="{{trans('home.lianxiwomen2')}}">{{trans('home.lianxiwomen2')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- AboutUs Section /- -->

    </main>
@endsection