<?php $titre = 'Gestion des élèves '.$eleve['Nom']; ?>
<?php ob_start(); ?>
<center><h1>bienvenu <?= $eleve['Nom'] ?></h1></center>
	<ul>
		<li>CNE : <?= $eleve['CNE'] ?></li>
		<li>Nom : <?= $eleve['Nom'] ?></li>
		<li>Prénom : <?= $eleve['Prenom'] ?></li>
		<li>Adresse : <?= $eleve['Adresse'] ?></li>
		<li>Ville : <?= $eleve['Ville'] ?></li>
		<li>Email : <?= $eleve['email'] ?></li>
	</ul>
	<?php if($eleve['etat'] == 1){?>
		<a href="modifier.php?id=<?= $eleve['ID'] ?>">modifier les donnees</a>
<?php } ?>
<?php $contenu = ob_get_clean();
require_once 'gabarit.php';
?>