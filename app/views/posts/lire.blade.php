@extends('main')

@section('content')

@if($post)

 
<div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">{{$post->title}}</h2>
  </div>
  <div class="panel-body">
    <p>{{$post->content}}</p>
    <a href="/posts/user/{{$post->id}}">Par {{$post->user->username}}</a>
  </div>
</div> 
 

@endif

@stop
