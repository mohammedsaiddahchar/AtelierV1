<?php
require_once 'Modele.php';
function accueil(){
	$eleves=getEleves();
	require_once 'vueAccueil.php';
}
function eleve($idEleve){
	$eleve = getEleve($idEleve);
	$absences = getAbsences($idEleve);
	require_once 'vueEleve.php';
}
function erreur($msgErreur){
	require_once 'vueErreur.php';
}