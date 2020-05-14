<?php 
function getEleves(){
$bdd = getBdd();
       $eleves = $bdd->query('select CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat from eleves');
       return $eleves;
}
function getBdd(){
	$bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '');
	return $Bdd;
}