@extends('home')

@section('titre')
	Recherche
@stop	

@section('content')
	<div id="recherche">	
		
		{!! Form::open(array('action' => 'UserController@search'))	!!} 
		{!!	Form::text('login', '', array('placeholder' => 'Login')) !!}
		@if ($errors->has('name'))
			{!!	$errors->first('login')	!!}
		@endif	
		{!! Form::text('name', '', array('placeholder' => 'Name')) !!}
		{!! Form::text('lastname', '', array('placeholder' => 'Lastname')) !!}
		{!! Form::text('birthdate', '', array('placeholder' => 'Birthdate dd/mm/yyyy')) !!}
		{!!	Form::select('gender', array('M' => 'Male', 'W' => 'Woman')) !!}
		{!! Form::text('city', '', array('placeholder' => 'City')) !!}
		{!! Form::text('departement', '', array('placeholder' => 'Departement')) !!}
		{!!	Form::text('region', '', array('placeholder' => 'Region')) !!}
		{!! Form::text('country', '', array('placeholder' => 'Country')) !!}
   		{!!	Form::email('e-mail', '', array('placeholder' => 'E-mail')) !!}
		{!! Form::password('password', array('placeholder' => 'Password')) !!}
		{!!	Form::submit("M'inscrire") !!}
  			<!-- 		{!! 	link_to('/', $title = 'Connexion', $attributes = array(), $secure = null) !!}
   			-->		
   		{!!	Form::close() !!}		
   	</div>
@stop