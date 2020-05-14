<?php 
if (isset($_POST['submit'])) {
	if($_POST['N'] == 0)header('location:index.php');
require_once('Modele/Modele.php');
$bdd=getBdd();$eleve=getEleve($_POST['id_E']);$absences=getAbsence($eleve['ID_eleve']);
$id=$_POST['id'];$N=$_POST['N'];
	$bdd->query("UPDATE absence SET nbr=nbr-'$N' WHERE ID_abs = '$id'");
	$bdd->query("DELETE from absence where nbr <= 0 ");
header('location:index.php');
}
?>
<?php require_once 'Modele/Modele.php';$eleve=getEleve($_GET['id_E']); ?>
<?php $titre = 'modifier '.$eleve['Nom']; ?>
<?php ob_start(); ?>
<h1>
		supperimer des absences pour 
		<?= $eleve['Nom'] ?>
		<?= $eleve['Prenom'] ?></h1>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<b>comment bien d'absences vous voulez supperimer :</b><input type="text" name="N">
	<input type="hidden" name="id" value="<?=  $_GET['id']?>">
	<input type="hidden" name="id_E" value="<?=  $_GET['id_E']?>">
	<input type="submit" name="submit" value="valide">
	<input type="reset" value="anuler">
	</form>
	<a href="index.php"><button>revenir</button></a>
</div>
<?php $contenu = ob_get_clean();
require_once 'Vue/gabarit.php';
?>