@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light btn-md" style="margin-bottom: 30px;">Go Back</a>
    <h2>{{$post->title}}</h1>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small><br>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div class="row" style="margin-left: 1px;">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary" style="margin-top: 10px; margin-right: 5px;">Edit</a>

                {!!Form::open(['action' => ['postController@destroy',$post->id],'method' => 'DELETE', 'class' => 'pull-right'])!!}
                    {{Form::submit('Delete', ['class' => 'btn btn-secondary','style' => 'margin-top: 10px;'])}}
                {!!Form::close()!!}
            </div>
            {{-- <a href="/posts/{{$post->id}}" class="btn btn-secondary" style="margin-top: 10px;">Delete</a> --}}
        @endif
    @endif
@endsection