@extends('master')
@section('title',trans('home.lianxiwomen'))
@section('description',trans('home.lianxiwomen'))

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>{{trans('home.lianxiwomen')}}</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">{{trans('home.zhuye1')}}</a></li>
                    <li class="active">{{trans('home.lianxiwomen')}}</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->
        <!-- ContactUs Section -->
        <div class="container-fluid no-padding contactus2">
            <div class="contactinfo-block container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="section-header">
                            <h3>{{trans('home.womendegongsi')}}</h3>
                        </div>


                     <img src="images/ditu.png" alt="our-office" width="420" height="330"/>



                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="section-header">
                            <h3>{{trans('home.zaixianliuyan')}}</h3>
                        </div>
                        <form class="contactus-form" method="post" action="/contact_submit">
                            {{csrf_field()}}
                            <input type="hidden" name="url" value="{{url()->current()}}">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" required="" placeholder="{{trans('home.mingzi')}}" id="input_name" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="email" required="" placeholder="{{trans('home.youxiang1')}}" id="input_email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea placeholder="{{trans('home.liuyanneirong')}}" id="textarea_message" class="form-control" name="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="submit" name="post" title="Send" id="btn_submit2" value="{{trans('home.fasongliuyan')}}">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h3>{{trans('home.lianxifangshi')}}</h3>
                        </div>
                        <div class="getintouch">
                            <p><span>{{trans('home.dizhi')}}</span>{{trans('home.dizhineirong')}}</p>
                            <p><span>{{trans('home.dianhua')}}</span><a href="tel:0371-67103035" title="0371-67103035">0371-67103035</a></p>
                            <p><span>{{trans('home.linshihuihua')}}</span>
                                <a target="_blank" href="tencent://message/?uin=2898494205&Site=Sambow&Menu=yes" title="QQ">
                                    <img src="http://pub.idqqimg.com/wpa/images/counseling_style_51.png" title="{{trans('home.dianjizheli')}}"
                                         class="logo_img">     2898494205</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ContactUs Section /- -->
    </main>
@endsection