@extends('main')

@section('content')

@if($user)

@foreach($user->posts as $p)

<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">{{$p->title}}</h2>
  </div>
  <div class="panel-body">
    <p>{{$p->content}}</p>
    <a href="/posts/user/{{$p->id}}">Par {{$p->user->username}}</a>
  </div>
</div> 

@endforeach

@endif

@stop
