@extends('layouts.app')

@section('content')
    <h1>Create Blog</h1>
    <hr>
    {!! Form::open(['action' => 'postController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection