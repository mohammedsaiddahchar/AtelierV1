<?php $titre = 'Gestion des élèves '.$eleve['Nom']; ?>
<?php ob_start(); ?>
<center><h1>bienvenu <?= $eleve['Nom'] ?></h1></center>
	<ul>
		<li><?= $eleve['CNE'] ?></li>
		<li><?= $eleve['Nom'] ?></li>
		<li><?= $eleve['Prenom'] ?></li>
		<li><?= $eleve['Adresse'] ?></li>
		<li><?= $eleve['Ville'] ?></li>
		<li><?= $eleve['email'] ?></li>
	</ul>
	<?php if($eleve['etat'] == 1){?>
		<a href="modifier.php?id=<?= $eleve['ID_eleve'] ?>">modifier les donnees</a>
<?php } ?>
<?php $contenu = ob_get_clean();
require_once 'Vue/gabarit.php';
?>