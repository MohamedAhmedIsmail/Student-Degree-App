@extends('layouts.master')


@section('content')
	<div class="container">
	<h2>Login</h2>
	{!!Form::open (array('route'=>'handleLogin'))!!}
	<div class="form-group">
		{!! Form::label('email')!!}
		{!! Form::text('email',null,array('class'=>'form-control'))!!}
	</div>
	<div class="form-group">
		{!! Form::label('password')!!}
		{!! Form::password('password',array('class'=>'form-control'))!!}
	</div>
	{!! Form::token()!!}
	{!!Form::submit(null,array('class'=>'btn btn-primary'))!!}
	{!! Form::close()!!}
	</div>
@endsection