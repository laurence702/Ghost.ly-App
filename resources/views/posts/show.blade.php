@extends('layouts.app')

@section('content')
<a class="btn btn-default" href='/posts/'>Go back</a>
<h1>{{$post->title}}</h1>
<div class="jumbotron pull-right">
    <div class='text-dark'>
        <h4>{!! $post->body !!}</h4>
        <small>written on {{$post->created_at}}</small>
    </div>
</div> 
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-danger">Edit</a>
{!!Form::open(['action'=> ['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>'float-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection