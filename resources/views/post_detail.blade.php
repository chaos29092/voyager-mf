@extends('post_sidebar')
@section('title')
    @if(!$post->seo_title)
        {{$post->title}}
    @else
        {{$post->seo_title}}
    @endif
@endsection
@section('description')
        {{$post->excerpt}}
@endsection

@section('crumbs')
    <li><a href="/articles">Articles</a></li>
    <li class="active">{{$post->title}}</li>
@endsection()

@section('new_content')
    <div class="col-md-8 col-sm-8 content-area">
        <article class="type-post">
            <div class="entry-cover">
                <img src="{{$post->image}}" alt="{{$post->title}}" width="791" height="421"/>
            </div>
            <div class="entry-block">
                <div class="entry-title">
                    <h3>{{$post->title}}</h3>
                </div>
                <div class="entry-content">
                    {!! $post->body !!}
                </div>
            </div>
        </article>
    </div>
@endsection