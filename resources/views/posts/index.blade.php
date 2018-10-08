@extends('layouts.app')

@section('content')
    <h1><center>Blog</center></h1>
    <hr>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <h4 style="margin-bottom: 5px;"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                        <p>{!!substr($post->body,0,38)!!}</p>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <footer>{{$posts->links()}}</footer>
    @else
        <p>No Post Found</p>
    @endif
    
@endsection