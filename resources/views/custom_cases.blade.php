@extends('master')
@section('title',trans('home.dingzhiluxing'))
@section('description',trans('home.xuqiudingzhilu'))

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>{{trans('home.dingzhianli')}}</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">{{trans('home.zhuye2')}}</a></li>
                    <li class="active">{{trans('home.dingzhianli')}}</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->
        <!-- Portfolio Section -->
        <div class="container-fuild no-padding project-portfolio portfolio-section">
            <div class="container">
                <div class="row">
                    <ul id="filters" class="portfolio-categories sorting-menu">
                        <li><a data-filter="*" class="active" href="#">{{trans('home.quanbu')}}</a></li>
                        <li><a data-filter=".atmosphere" href="#">{{trans('home.qifenlu')}}</a></li>
                        <li><a data-filter=".tube" href="#">{{trans('home.guanshilu')}}</a></li>
                        <li><a data-filter=".vacuum" href="#">{{trans('home.zhenkonglu')}}</a></li>
                        <li><a data-filter=".other" href="#">{{trans('home.qita')}}</a></li>
                    </ul>
                    <ul class="portfolio-list no-padding">
                        <li class="col-md-4 col-sm-4 col-xs-6  tube ">
                            <div class="image-block">
                                <img src="images/dingzhi/dakoujingguanshilu.png" alt="{{trans('home.dakoujingguanshilu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/dakoujingguanshilu.png" class="zoom" title="{{trans('home.dakoujingguanshilu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>


                        <li class="col-md-4 col-sm-4 col-xs-6 tube ">
                            <div class="image-block">
                                <img src="images/dingzhi/duogongweiguanshilu1.png" alt="{{trans('home.duogongweiguanshilu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/duogongweiguanshilu1.png" class="zoom" title="{{trans('home.duogongweiguanshilu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>

                        <li class="col-md-4 col-sm-4 col-xs-6 atmosphere ">
                            <div class="image-block">
                                <img src="images/dingzhi/daqifenlu.png" alt="{{trans('home.daxingqifenlu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/daqifenlu.png" class="zoom" title="{{trans('home.daxingqifenlu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 atmosphere">
                            <div class="image-block">
                                <img src="images/dingzhi/qifenlu.png" alt="{{trans('home.qifenlu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/qifenlu.png" class="zoom" title="{{trans('home.qifenlu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 other">
                            <div class="image-block">
                                <img src="images/dingzhi/dianjiarehuizhuanjiao.png" alt="{{trans('home.dianjiarehuizhuanjiao')}}" width="370" height="220"/>
                                <a href="images/dingzhi/dianjiarehuizhuanjiao.png" class="zoom" title="{{trans('home.dianjiarehuizhuanjiao')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 tube ">
                            <div class="image-block">
                                <img src="images/dingzhi/keqingxieduogongweiguanshilu.png" alt="{{trans('home.keqingxieduogongwei')}}" width="370" height="220"/>
                                <a href="images/dingzhi/keqingxieduogongweiguanshilu.png" class="zoom" title="{{trans('home.keqingxieduogongwei')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 tube ">
                            <div class="image-block">
                                <img src="images/dingzhi/zhenkongreyalu.png" alt="{{trans('home.zhengongreyalu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/zhenkongreyalu.png" class="zoom" title="{{trans('home.zhengongreyalu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 other">
                            <div class="image-block">
                                <img src="images/dingzhi/dingzhiguanshilu.png" alt="{{trans('home.wuliaoguanshilu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/dingzhiguanshilu.png" class="zoom" title="{{trans('home.wuliaoguanshilu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 other">
                            <div class="image-block">
                                <img src="images/dingzhi/bolironghualu2.png" alt="{{trans('home.bolironghualu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/bolironghualu2.png" class="zoom" title="{{trans('home.bolironghualu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 tube">
                            <div class="image-block">
                                <img src="images/dingzhi/guanshilu2.png" alt="{{trans('home.dingzhiguanshilu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/guanshilu2.png" class="zoom" title="{{trans('home.dingzhiguanshilu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 tube">
                            <div class="image-block">
                                <img src="images/dingzhi/guanshimafulu.png" alt="{{trans('home.dingzhiguanshilu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/guanshimafulu.png" class="zoom" title="{{trans('home.dingzhiguanshilu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 vacuum">
                            <div class="image-block">
                                <img src="images/dingzhi/zhenkonglu.png" alt="{{trans('home.dingzhizhenkonglu')}}" width="370" height="220"/>
                                <a href="images/dingzhi/zhenkonglu.png" class="zoom" title="{{trans('home.zhenkonglu')}}"><span class="icon icon-Goto"></span></a>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div><!-- Portfolio Section /- -->
    </main>
@endsection



