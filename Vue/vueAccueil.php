<?php $titre = 'Gestion des élèves';
ob_start();?>
<h1>Liste des élèves</h1>
<table>
	<tr>
		<td>CNE</td>
		<td>Nom</td>
		<td>Prénom</td>
		<td>Adresse</td>
        <td>Ville</td>
        <td>Email</td>
        <td>Photo</td>
        <td>etat</td>
	</tr><?php
foreach ($eleves as $eleve) :
	$et="";
	$lien="";
	if($eleve["etat"]==1)
	{
		$et="active";
		$lien="activer.php?cne=".$eleve["CNE"]."&etat=0";
	}
	else
	{
		$et="desactive";
		$lien="activer.php?cne=".$eleve["CNE"]."&etat=1";
	}
	?>
		<tr>
		<td><a href="index.php?action=eleve&id=<?= $eleve['ID_eleve'] ?>"><?=  $eleve["CNE"]; ?></a></td>
		<td><?=  $eleve["Nom"]; ?></td>
		<td><?=  $eleve["Prenom"]; ?></td>
        <td><?=  $eleve["Adresse"]; ?></td>
        <td><?=  $eleve["Ville"]; ?></td>
        <td><?=  $eleve["email"]; ?></td>
        <td><img src="<?= $eleve['Photo'] ?>" height="45px"></td>
		<td><a href="<?=  $lien; ?>"><?=  $et; ?></a></td>
	</tr>
<?php endforeach;?>
</table>
<?php
$contenu = ob_get_clean();
require_once 'Vue/gabarit.php';
?>