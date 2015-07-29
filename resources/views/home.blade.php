<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>@yield('titre')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="style.css">
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		@yield('body')
		<nav class="navbar navbar-inverse navbar-fixed-top">
			@if(Auth::check())
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="{{URL::to('/accueil')}}">My meetic</a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li><a href="{{URL::to('/profil')}}">Mon profil</a></li>
		            <li><a href="">Recherche</a></li>
								<li><a href="<?php echo action('UserController@deconnexion')?>">Déconnexion</a></li>
			@else
								<div class="container">
								  <div class="navbar-header">
								    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								      <span class="sr-only">Toggle navigation</span>
								      <span class="icon-bar"></span>
								      <span class="icon-bar"></span>
								      <span class="icon-bar"></span>
								    </button>
								    <a class="navbar-brand" href="">My meetic</a>
								  </div>
								<div id="navbar" class="collapse navbar-collapse">
								  <ul class="nav navbar-nav">
										<li><a href="{{URL::to('/login')}}">Connexion</a></li>
										<li><a href="{{URL::to('/signin')}}">Inscription</a></li>
									</ul>	
							</ul>
							@endif
		        </div>
		      </div>
		 </nav>
		<div class="conteneur">
			@yield('content')
		</div>	

	</body>
</html>
