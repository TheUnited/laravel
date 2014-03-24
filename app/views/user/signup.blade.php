@extends('main')

@section('content')



{{ Form::open(array('user/signup' => 'well bs-component')) }}

{{ Form::token() }}

<div class="panel panel-default">
  <div class="panel-heading">Inscription</div>
  <div class="panel-body">

<form class="form-horizontal">
  	<fieldset>
		<div class="form-group">
		
		{{Form::label('Login', 'Votre Login')}}
		{{Form::text('Login', 'Login', array('class'=>'form-control'))}}
		
		<br>

		{{Form::label('Email', 'Votre Email')}}
		{{Form::text('email', 'email@host.com', array('class'=>'form-control',))}}
		
		<br>
		
		{{Form::label('password', 'Votre Password')}}
		{{Form::password('password', array('class'=>'form-control' , 'placeholder'=>'Password'))}}

		<br>
		
		{{Form::label('password2', 'Répétez Votre Password')}}
		{{Form::password('Password2', array('class'=>'form-control' , 'placeholder'=>'Password'))}}

			<br>

		{{Form::submit('Envoyer', array('class'=>'btn btn-success'))}}
		

		</div>
	</fieldset>
</form>


  </div>
</div>

{{ Form::close() }}




@stop