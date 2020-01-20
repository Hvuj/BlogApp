@extends('layouts.app')

@section('content')
<div class="card-header">
    <a href="/posts" class="btn btn-primary">Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:20%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Wrriten on {{$post->created_at}} by {{$post->user->first_name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
</div>
@endsection