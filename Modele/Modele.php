<?php 
function getEleves(){
$bdd = getBdd();
       $eleves = $bdd->query('select ID_eleve,CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat from eleves');
       return $eleves;
}
function getBdd(){
	$bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	return $bdd;
}
function getEleve($idEleve){
	$bdd = getBdd();
	$eleve = $bdd->prepare('select ID_eleve, CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat from eleves where ID_eleve = ?');
	$eleve->execute(array($idEleve));
	if ($eleve->rowCount() == 1) {
		return $eleve->fetch();
	}
	else
		throw new Exception("Aucun eleve ne correspond à l'identifiant '$idEleve'");
		
}
function getAbsence($idEleve){
	$bdd = getBdd();
	$absences = $bdd->prepare('select nbr from absence where ID_eleve = ?');
	$absences->execute(array($idEleve));
			return $absences;
	}