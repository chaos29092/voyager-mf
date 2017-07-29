@extends('post_sidebar')
@section('title',$category->name)
@section('description',$category->name)

@section('crumbs')
    <li class="active">{{$category->name}}</li>
@endsection()

@section('new_content')
    <div class="col-md-8 col-sm-8 content-area">
        @foreach($posts as $post)
        <article class="type-post">
            <div class="entry-cover">
                <a href="/articles/{{$post->slug}}" title="{{$post->title}}"><img src="{{$post->image}}" alt="{{$post->title}}" width="791" height="421"/></a>
                <a href="/articles/{{$post->slug}}"><span class="icon_plus" aria-hidden="true"></span></a>
            </div>

            <div class="entry-block">
                <div class="entry-title">
                    <a href="/articles/{{$post->id}}" title="{{$post->title}}"><h3>{{$post->title}}</h3></a>
                </div>
                <div class="entry-content">
                    <p>{{$post->excerpt}}[...]</p>
                </div>
                <a href="/articles/{{$post->slug}}" title="Read More">{{trans('home.wenzhangxiangqing')}}<span class="arrow_right" aria-hidden="true"></span></a>
            </div>
        </article>
        @endforeach
        <nav class="ow-pagination">
            {{ $posts->links() }}
        </nav>
    </div>
@endsection