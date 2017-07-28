@extends('master')
@section('title',trans('home.guanyunuotai'))
@section('description',trans('home.guanyunuotai'))

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>{{trans('home.guanyuwomen')}}</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">{{trans('home.zhuye')}}</a></li>
                    <li class="active">{{trans('home.guanyuwomen')}}</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->

        <div class="container projectsingle">
            <div class="row">
                <div class="col-md-4 col-sm-6 projectsingle-content_part">
                    <div class="section-header">
                        <h3><strong>{{trans('home.gongsijianjie')}}</strong></h3>
                    </div><br/>
                    <p>{{trans('home.jianjieneirong')}}
                         </p>
                    <br/><br/>
                    <h3>{{trans('home.zhuanyeshili')}}</h3>
                    <p>{{trans('home.zhuanyeshilineirong1')}}</p>
                    <ul class="project-challenges">
                        <li>{{trans('home.zhuanyeshilineirong2')}}</li>
                        <li>{{trans('home.zhuanyeshilineirong3')}}</li>
                        <li>{{trans('home.zhuanyeshilineirong4')}}</li>
                    </ul>
              <br/><br/>
                  <p>{{trans('home.zhuanyeshilineirong5')}}</p>


                </div>
                <div class="col-md-8 col-sm-6 projectsingle-img_part">
                    <img src="images/dingzhi/jianjie3.png" alt="project-detail-1" width="740" height="540"/>
                    <img src="images/dingzhi/jianjie4.png" alt="project-detail-2" width="740" height="540"/>
                </div>
            </div>
        </div>
    </main>
@endsection

