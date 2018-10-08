@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>{{$about}}</p>
    @if(count($service) > 0)
        <ul class="list-group list-group-flush">
        @foreach($service as $serv)
            <li class="list-group-item">{{$serv}}</li>
        @endforeach
        </ul>
    @endif
@endsection