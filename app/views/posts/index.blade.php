@extends('main')
 
@section('content')
 
@if($posts)

@foreach($posts as $p)
 
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h2 class="panel-title">{{$p->title}}</h2>
	  </div>
	  <div class="panel-body">
	    <p>{{Str::limit($p->content,200)}}<a class="btn btn-link" href="/posts/{{$p->id}}">View more</a></p>
	    <a href="/posts/user/{{$p->id}}">Par {{$p->user->username}}</a>
	  </div>
	</div> 

@endforeach

@endif
 
@stop