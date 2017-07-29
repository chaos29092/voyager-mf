@extends('master')
@section('title',$page->title)
@section('description',$page->excerpt)

@section('content')
    <main class="site-main page-spacing">
        <!-- PageBanner -->
        <div class="container-fluid no-padding pagebanner">
            <div class="container">
                <h3>{{$page->title}}</h3>
            </div>
        </div><!-- PageBanner /- -->
        <div class="container-fluid no-padding page-breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">{{trans('home.zhuye')}}</a></li>
                    <li class="active">{{$page->title}}</li>
                </ol>
            </div>
        </div><!-- PageBanner /- -->

        <div class="container projectsingle">
            <div class="row">
                {!! $page->body !!}
            </div>
        </div>
    </main>
@endsection

