<?php require_once 'Modele/Modele.php';$eleve=getEleve($_GET['id']);$absences=getAbsence($_GET['id']) ?>
<?php $titre = 'absence '.$eleve['Nom']; ?>
<?php ob_start(); ?>
<center><h1>les absences de <?= $eleve['Nom'] ?></h1></center>
<table>
	<tr>
		<td>matiere</td>
		<td>nombre d'absence</td>
	</tr>
	<?php foreach ($absences as $absence) :?>
	<tr>
		<td><?= $absence['matiere'] ?></td>
		<td><?= $absence['nbr'] ?></td><?php if($_GET['etat'] != 0){ ?>
		<td><a href="delabs.php?id=<?= $absence['ID_abs']?>&id_E=<?= $absence['ID_eleve']?>">supperimer des absence</a></td><?php } ?>
	</tr>
<?php endforeach; ?>
</table><?php if($_GET['etat'] != 0){ ?>
<a href="addabs.php?id=<?= $eleve['ID_eleve']?>">ajouter des absence</a><?php } ?><br>
<a href="index.php">revenir</a>
<?php $contenu = ob_get_clean();
require_once 'Vue/gabarit.php';