@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif  
    <h1>Welcome!</h1>
</div>
<div>
    <h3 class="text-center">Your Blog Posts</h3>
    @if(count($posts)>0)
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>
                        <div class="row" style="margin-left: 1px;">
                            <a href='posts/{{$post->id}}/edit' class="btn btn-primary">Edit</a> 
                            {!!Form::open(['action' => ['postController@destroy',$post->id],'method' => 'DELETE', 'class' => 'pull-right'])!!}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger','style' => 'margin-left: 5px;'])}}
                            {!!Form::close()!!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <br><p class="text-center">You still don't have any posts</p>
    @endif
</div>
@endsection
