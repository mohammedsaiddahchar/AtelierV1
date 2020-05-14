<?php 
require_once 'Modele.php';
try {
	if(isset($_GET['id'])){
		$id = intval($_GET['id']);
		if($id != 0){
			$eleve = getEleve($id);
			$absences = getAbsences($id);
			require_once 'vueEleve.php';
		}
		else
			throw new Exception("Identifiant d'eleve incorrect");			
	}
	else
		throw new Exception("Aucun identifiant d'eleve");
		
} catch (Exception $e) {
$msgErreur = $e->getMessage();
	require_once 'vueErreur.php';
}