<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <title>@yield('title') - {{trans('home.nuotaikeji')}}</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/apple-icon-114x114.png')}}">
    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/apple-icon-72x72.png')}}">
    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/apple-icon-57x57.png')}}">
    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('libraries/lib.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('libraries/Stroke-Gap-Icon/stroke-gap-icon.css')}}">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navigation-menu.css')}}">

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcode.css')}}">

    <!--[if lt IE 9]>
    <script src="{{asset('js/html5/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body class="woocommerce" data-offset="200" data-spy="scroll" data-target=".ow-navigation">

<!-- Header -->
<header class="header-main container-fluid no-padding">
    <!-- SidePanel -->
    <div id="slidepanel">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <span>{{trans('home.zhuanzhushebeigongjiang')}}</span>
                <div class="header-contact-info">
                <b> <span><strong>{{trans('home.zixundianhua')}}</strong>></span><a href="tel: 037153370200"
                          title="{{trans('home.dianhuahaoma')}}">  037153370200</a></b>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            ENGLISH
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="http://en.china-protech.com/">ENGLISH</a></li>
                            <li><a href="http://www.china-protech.com/">CHINESE</a></li>

                        </ul>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Top Header /- -->

        <!-- Middel Header /- -->
        <div class="middle-header container-fluid no-padding">
            <div class="container">
                <div class="logo-block">
                    <a href="/"><img src="{{asset('images/uploads/logo4.png')}}" alt="logo" height="80" width="320"/></a>
                </div>
                <div class="header-info">
                    <a href="/contact_us" title="{{trans('home.zixunchanpin')}}">{{trans('home.zixunchanpin')}}</a>
                    {{--<ul>--}}
                        {{--<li><h3>{{trans('home.duozhongzhuanli')}}</h3><span>{{trans('home.yanfashili')}}</span></li>--}}
                        {{--<li><h3>{{trans('home.dingzhijingyan')}}</h3><span>{{trans('home.qiangdatuandui')}}</span></li>--}}
                        {{--<li><h3>{{trans('home.shinianjingyan')}}</h3><span>{{trans('home.kehupinpai')}}</span></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-social">
                <ul>
                    <li><a href="tel:0371-67103035" title="phone"><i class="fa icon_phone" aria-hidden="true"></i></a></li>
                    <li><a href="mailto:info@lab-furnace.com" title="email"><i class="fa icon_mail" aria-hidden="true"></i></a></li>

                </ul>
            </div>
        </div>
    </div>

    <!-- Menu Block -->
    <div class="menu-block menu-block-section container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <span><i class="fa fa-home" aria-hidden="true"></i></span>
            <nav class="navbar ow-navigation">
                <div id="loginpanel" class="desktop-hide">
                    <div class="right" id="toggle">
                        <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                        <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                    </div>
                </div>
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="text-logo desktop-hide" href="/">Manufactor</a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    {{menu('main','menu.main')}}
                </div>
            </nav><!-- Navigation /- -->
            <div class="menu-search">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
                        
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- Menu Block /- -->
</header><!-- Header /- -->

@yield('content')

<!-- Footer Main -->
<footer class="footer-main container-fluid no-padding">
    <div class="container">
        <div class="row">
            <!-- Widget About -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget about-widget">
                <h3>{{trans('home.guanyunuotai')}}</h3>
                <p>{{trans('home.guanyunuotaineirong')}}</p>
                <a href="/about_us" title="Learn More">{{trans('home.gengduo')}}</a>
            </aside><!-- Widget About /- -->

            <!-- Widget Links -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget link-widget">
                <h3>{{trans('home.kuaijielianjie')}}</h3>
                <ul>
                    <li><a href="/categories" title="{{trans('home.chanpin3')}}">{{trans('home.chanpin3')}}</a></li>
                    <li><a href="/custom_cases" title="{{trans('home.dingzhianli')}}">{{trans('home.dingzhianli')}}</a></li>
                    <li><a href="/about_us" title="{{trans('home.guanyuwomwen')}}">{{trans('home.guanyuwomwen')}}</a></li>

                    <li><a href="/contact_us" title="{{trans('home.lianxiwomen3')}}">{{trans('home.lianxiwomen3')}}</a></li>
                </ul>
            </aside><!-- Widget Links /- -->

            <!-- Widget Contact -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget contact-widget">
                <h3>{{trans('home.lianxifangshi')}}</h3>

                <p><span class="icon icon-Phone2"></span>{{trans('home.guhua')}}<a href="tel: 037153370200"
                                                                                   title=" 037153370200"> 037153370200</a></p>

                <p><span class="icon icon-Printer"></span>{{trans('home.chuanzhen')}}<a  title="0371-67103035">0371-67103035</a></p>
                <p><span class="icon icon-Mail"></span>{{trans('home.youxiang')}}<a title="info@lab-furnace.com" href="Mailto:info@lab-furnace.com">info@lab-furnace.com</a></p>
                <p><span class="icon icon-Pointer"></span>{{trans('home.dizhineirong2')}}</p>
            </aside><!-- Widget Contact /- -->

            <!-- Widget Isnstagram -->
            <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget instagram-widget">
                <h3>{{trans('home.nuotaifengcai')}}</h3>
                <ul>
                    <li><a href="/about_us" title="instagram"><img src="{{asset('images/uploads/zhanhui3.png')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="/about_us" title="instagram"><img src="{{asset('images/uploads/fengcai8.png')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="/about_us" title="instagram"><img src="{{asset('images/uploads/fengcai7.png')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="/about_us" title="instagram"><img src="{{asset('images/uploads/fengcai2.png')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="/about_us" title="instagram"><img src="{{asset('images/uploads/fengcai3.png')}}" alt="Insta1" width="90" height="90"/></a></li>
                    <li><a href="/about_us" title="instagram"><img src="{{asset('images/uploads/fengcai9.png')}}" alt="Insta1" width="90" height="90"/></a></li>
                </ul>
            </aside><!-- Widget Newsletter /- -->
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span>{{trans('home.banquansuoyou')}}Copyright &copy; 2017.</span>
            <p>
                <a href="#" title="Terms Of Use ">{{trans('home.gongsimingcheng')}}</a>
                <a href="#" title="Privacy & Security Statement">豫ICP备17016203号-1</a>
            </p>
        </div>
    </div>
</footer><!-- Footer Main /- -->
<!-- JQuery v1.11.3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Library - Js -->
<script src="{{asset('libraries/lib.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->


<!-- Library - Theme JS -->
<script src="{{asset('js/functions.js')}}"></script>
</body>
</html>