@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-success mb-3">Go Back</a>
    <h1>{{$post->title}}</h1>
      <div>
        {!! $post->body !!}
      </div>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=> 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {!!Form::close()!!}
@endsection