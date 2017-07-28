@extends('master')
@section('title',trans('home.liuyanchenggong'))
@section('description',trans('home.liuyanchenggong'))

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>{{trans('home.xiexieliuyan')}}</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">{{trans('home.zhuye5')}}</a></li>
                    <li class="active">{{trans('home.liuyanchenggong')}}</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->

        <div class="container projectsingle">
            <div class="row">
                <p>{{trans('home.liuyanchenggongneirong')}}</p>
            </div>
        </div>
    </main>
@endsection