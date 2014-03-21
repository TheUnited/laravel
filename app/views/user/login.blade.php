@extends('main')

@section('content')



{{ Form::open(array('user/signup' => 'well bs-component')) }}

{{ Form::token() }}

{{ Form::text('username', array) }}

<br>

{{ Form::submit('Signup', array('class'=>'btn btn-success')) }}

{{ Form::close() }}




@stop