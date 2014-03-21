@extends('main')

@section('content')



{{ Form::open(array('user/signup' => 'well')) }}

{{ Form::token() }}

{{ Form::password('password') }}

{{ Form::close() }}




@stop