@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-header p-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:60%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Wrriten on {{$post->created_at}} by {{$post->user->first_name}}</small>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>no posts found</p>
    @endif
@endsection