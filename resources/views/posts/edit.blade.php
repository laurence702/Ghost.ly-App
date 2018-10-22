@extends('layouts.app')

@section('content')
    <h1>Create</h1>            
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' =>'PUT' ])!!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control','placeholder' =>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class' => 'form-control','placeholder' =>'body text'])}}
            </div>
            {{Form::hidden('_METHOD','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-default'])}}
    {!! Form::close() !!}
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <hr>
            </div>
            <div class="col-md-3">
                <hr>
            </div>
        </div>
    </div>
@endsection