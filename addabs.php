<?php 
if (isset($_POST['submit'])) {
	if($_POST['matiere'] == '')header('location:index.php');
	if($_POST['nbr'] == 0)header('location:index.php');
require_once('Modele/Modele.php');
$bdd=getBdd();$eleve=getEleve($_POST['id']);$absences=getAbsence($_POST['id']);
$id=$_POST['id'];$matiere=$_POST['matiere'];$nbr=$_POST['nbr'];
$test=$bdd->query("SELECT ID_abs,nbr from absence where matiere='$matiere' AND ID_eleve = '$id'");
if ($test->rowCount() != 0){
	$bdd->query("UPDATE absence SET nbr=nbr+'$nbr' WHERE matiere='$matiere' AND ID_eleve = '$id'");} 
	else{		
	$bdd->query("INSERT INTO absence (matiere , nbr , ID_eleve) VALUES ('$matiere' , '$nbr' , '$id')");}
header('location:index.php');
}
?>
<?php require_once 'Modele/Modele.php';$eleve=getEleve($_GET['id']); ?>
<?php $titre = 'modifier '.$eleve['Nom']; ?>
<?php ob_start(); ?>
<h1>
		ajouter des absences pour 
		<?= $eleve['Nom'] ?>
		<?= $eleve['Prenom'] ?></h1>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<ul>
		<li><b>matiere :</b><input type="text" name="matiere"></li>
		<li><b>nombre d'absences :</b><input type="text" name="nbr"></li>
	</ul>
	<input type="hidden" name="id" value="<?=  $_GET['id']?>">
	<input type="submit" name="submit" value="valide">
	<input type="reset" value="anuler">
	</form>
	<a href="index.php"><button>revenir</button></a>
</div>
<?php $contenu = ob_get_clean();
require_once 'Vue/gabarit.php';
?>