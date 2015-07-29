@extends('home')

@section('titre')
	Connexion
@stop	

@section('content')
	
	<div id="login">	
		<h1>Connectez-vous sur Meetic !</h1>
		{!! Form::open(array('action' => 'UserController@login'))	!!} 
		
		<div class="form-group">
			{!!	Form::text('login', '', array('placeholder' => 'Login', 'class' => 'form-control')) !!}
		</div>
		
		<div class="form-group">	
			{!! Form::password('password', array('placeholder' => 'Password', 'class'=>'form-control')) !!}
		</div>	
		
		{!!	Form::submit("Connexion", ['class' => 'btn btn-info pull-right']) !!}
		{!!	Form::close() !!}
		
		<div class="lien">
			Pas encore de compte ? <a href="{{URL::to('/signin')}}">Inscrivez-vous</a>
		</div>
	
	</div>	 
@stop	