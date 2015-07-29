@extends('home')

@section('titre')
	Profil
@stop	

@section('content')
	<div id="profil">
		<h1>Bienvenue sur Meetic <?php echo $user->login; ?></h1>
		<ul>
			<li>Prénom: <?php echo $user->lastname; ?></li>	
			<li>Nom: <?php echo $user->name; ?></li>
			<li>Date de naissance: <?php echo $user->birthdate; ?></li>
			<li>Ville: <?php echo $user->city; ?></li>
		</ul>
	</div>
@stop	