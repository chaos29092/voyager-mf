@extends('master')

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>{{trans('home.nuotaixinwen')}}</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">{{trans('home.zhuye4')}}</a></li>
                    <li class="active">{{trans('home.xinwenliebiao')}}</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->
        <!-- Blog Section -->
        <div class="container latestnews-section blog">
            <div class="row">
                @yield('new_content')

                <div class="col-md-4 col-sm-4 widget-area">
                    <aside class="widget widget_categories">
                        <h3 class="widget-title">{{trans('home.wenzhangfenlei')}}</h3>
                        <ul>
                            <li><a href="/news" title="Materials">{{trans('home.gongsixinwen')}}</a></li>
                            <li><a href="/tech" title="Environment">{{trans('home.jishuwenzhang')}}</a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_recent">
                        <h3 class="widget-title">{{trans('home.zhongyaoxinwen')}}</h3>
                        <div class="recent-block">
                            <a href="/articles/4"><img width="81" height="81" alt="latestpost-1" src="{{asset('images/jishu/zhenkonglu.png')}}"></a>
                            <div class="recent-content">
                                <h3><a href="/articles/4" title="{{trans('home.zhongyaoxinwenneirong1')}}">{{trans('home.zhongyaoxinwenneirong1')}}</a></h3>
                                <a href="/articles/4" title="25th May 2016">25th May 2016</a>
                            </div>
                        </div>
                        <div class="recent-block">
                            <a href="/articles/11"><img width="81" height="81" alt="yakelujishu.png" src="{{asset('images/jishu/yakelujishu.png')}}"></a>
                            <div class="recent-content">
                                <h3><a href="/articles/11" title="{{trans('home.zhongyaoxinwenneirong2')}}">{{trans('home.zhongyaoxinwenneirong2')}}</a></h3>
                                <a href="/articles/11" title="26th May 2016">26th May 2016</a>
                            </div>
                        </div>
                        <div class="recent-block">
                            <a href="/articles/14"><img width="81" height="81" alt="pecvd.png" src="{{asset('images/jishu/pecvd.png')}}"></a>
                            <div class="recent-content">
                                <h3><a href="/articles/14" title="{{trans('home.zhongyaoxinwenneirong3')}}">{{trans('home.zhongyaoxinwenneirong3')}}</a></h3>
                                <a href="/articles/14" title="10th June 2016">10th June 2016</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div><!-- Blog Section /- -->
    </main>
@endsection