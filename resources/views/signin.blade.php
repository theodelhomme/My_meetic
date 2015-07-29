@extends('home')

@section('titre')
	Inscription
@stop	

@section('content')
	<div id="sign">	
		<h1>Inscrivez-vous sur Meetic !</h1>
		
		{!! Form::open(array('action' => 'UserController@create'))	!!}
		
		<div class="form-group">
			{!!	Form::text('login', '', array('placeholder' => 'Login', 'class' => 'form-control')) !!}
			{!! $errors->first('login', '<small class="help-block">:message</small>') !!}
		</div>

		<div class="form-group">	
			{!! Form::text('name', '', array('placeholder' => 'Name', 'class' => 'form-control')) !!}
			{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
		</div>
		
		<div class="form-group">	
			{!! Form::text('lastname', '', array('placeholder' => 'Lastname', 'class' => 'form-control')) !!}
			{!! $errors->first('lastname', '<small class="help-block">:message</small>') !!}
		</div>

		<div class="form-group">	
			{!! Form::date('birthdate', '', array('placeholder' => 'Birthdate dd/mm/yyyy', 'class' => 'form-control')) !!}
			{!! $errors->first('birthdate', '<small class="help-block">:message</small>') !!}
		</div>

		<div class="form-group">	
			{!!	Form::select('gender', array('M' => 'Male', 'W' => 'Woman', 'class' => 'form-control')) !!}
			{!! $errors->first('gender', '<small class="help-block">:message</small>') !!}
		</div>

		<div class="form-group">	
			{!! Form::text('city', '', array('placeholder' => 'City', 'class' => 'form-control')) !!}
			{!! $errors->first('city', '<small class="help-block">:message</small>') !!}
		</div>

		<div class="form-group">	
			{!! Form::text('departement', '', array('placeholder' => 'Departement', 'class' => 'form-control')) !!}
			{!! $errors->first('departement', '<small class="help-block">:message</small>') !!}
		</div>
		
		<div class="form-group">	
			{!!	Form::text('region', '', array('placeholder' => 'Region', 'class' => 'form-control')) !!}
			{!! $errors->first('region', '<small class="help-block">:message</small>') !!}
		</div>
		
		<div class="form-group">	
			{!! Form::text('country', '', array('placeholder' => 'Country', 'class' => 'form-control')) !!}
			{!! $errors->first('country', '<small class="help-block">:message</small>') !!}
		</div>
	
		<div class="form-group">	
   			{!!	Form::email('email', '', array('placeholder' => 'E-mail', 'class' => 'form-control')) !!}
   			{!! $errors->first('e-mail', '<small class="help-block">:message</small>') !!}
		</div>

		<div class="form-group">	
			{!! Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) !!}
			{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
		</div>	
		
		{!!	Form::submit("M'inscrire", ['class' => 'btn btn-info pull-right']) !!}
   		{!!	Form::close() !!}

   		<div class="lien">
   			Déjà membre ? <a href="{{URL::to('/login')}}">Connectez-vous</a>
   		</div>		
   	
   	</div>
@stop   		