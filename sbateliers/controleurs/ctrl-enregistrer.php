<?php

	$civilite = $_POST[ "civilite" ] ;
	$nom = $_POST[ "nom" ] ;
	$prenom = $_POST[ "prenom" ] ;
	$naissance = $_POST[ "naissance" ] ;
	$email = $_POST[ "email" ] ;
	$mobile = $_POST[ "mobile" ] ;
	$adresse = $_POST[ "adresse" ] ;
	$cp = $_POST[ "cp" ] ;
	$ville = $_POST[ "ville" ] ;
	$mdp = $_POST[ "mdp" ] ;


//nom//
$regex = '/^[a-z]{2,60}|[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}$/';

if (!preg_match($regex, $email)) {
    echo "Le nom n'est pas valide";
}


//prenom//
$regex = '/^[a-z]{2,60}|[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}$/';

if (!preg_match($regex, $email)) {
    echo "Le prenom n'est pas valide";
}


//email//
$regex = '/^[a-z]{2,30}\.[a-z]{2,30}@gmail\.com$/';

if (!preg_match($regex, $email)) {
    echo "L'adresse e-mail n'est pas valide. Voici le format à respecter : xxxxx.xxxxx@gmail.com";
}


//mobile//
$regex = '/^[0-9]{10}$/';

if (!preg_match($regex, $email)) {
    echo "Le numéro de téléphone n'est pas valide. Voici le format à respecter : xxxxxxxxxx";
}


//adresse//
$regex = '/^[a-z]{2,60}|[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}$/';

if (!preg_match($regex, $email)) {
    echo "L'addresse n'est pas valide";
}


//cp//
$regex = '/^[0-9]{5}$/';

if (!preg_match($regex, $email)) {
    echo "Le code postal. Voici le format à respecter : xxxxx";
}


//ville//
$regex = '/^[a-z]{2,60}|[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}+[a-z]{2,60}$/';

if (!preg_match($regex, $email)) {
    echo "La ville n'est pas valide";
}


//mdp//
$regex = '/^((?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*\d)(?=.*(_|[^\w])).{8,})+$/';

if (!preg_match($regex, $email)) {
    echo "Le mot de passe n'est pas valide. Voici le format à respecter : minimun 1 lettre minuscule, minimum 1 lettre majuscule, minimum 1 chiffre, minimum 1 caractère spécial et l'ensemble du mdp doit faire 8 caractère";
}


	require "modeles/ModeleSBAteliers.php" ;
	ModeleSBAteliers::enregistrerClient( 
			$civilite ,
			$nom ,
			$prenom ,
			$naissance ,
			$email ,
			$mobile ,
			$adresse ,
			$cp ,
			$ville ,
			$mdp
		) ;
	
	header( "Location: /sbateliers" ) ;

?>


