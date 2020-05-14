<?php
       require_once 'Modele.php';
       try {
       	$eleves=getEleves();
       require_once 'vueAccueil.php';
       } catch (Exception $e) {  
       	echo ' <html><body>Erreur!!'.$e->getMessage().'</body></html>';
       }