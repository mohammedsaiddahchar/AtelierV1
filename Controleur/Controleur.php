<?php
require_once 'Modele/Modele.php';
function accueil(){
	$eleves=getEleves();
	require_once 'Vue/vueAccueil.php';
}
function eleve($idEleve){
	$eleve = getEleve($idEleve);
	$absences = getAbsence($idEleve);
	require_once 'Vue/vueEleve.php';
}
function erreur($msgErreur){
	require_once 'Vue/vueErreur.php';
}