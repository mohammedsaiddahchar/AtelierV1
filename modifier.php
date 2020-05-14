<?php 
if (isset($_POST['submit'])) {
require_once('Modele/Modele.php');
$bdd=getBdd();$eleve=getEleve($_POST['id']);
$cne=$_POST['cne'];
$Adresse=($_POST['Adresse']!=''?$_POST['Adresse']:$eleve['Adresse']);
$Ville=($_POST['Ville']!=''?$_POST['Ville']:$eleve['Ville']);
$email=($_POST['email']!=''?$_POST['email']:$eleve['email']);
$bdd->query("UPDATE eleves SET Adresse='$Adresse', Ville='$Ville', email='$email' WHERE CNE='$cne'"); 
header('location:index.php');
}
?>
<?php require_once 'Modele/Modele.php';$eleve=getEleve($_GET['id']); ?>
<?php $titre = 'modifier '.$eleve['Nom']; ?>
<?php ob_start(); ?>
<h1>
		<?= $eleve['CNE'] ?>
		<?= $eleve['Nom'] ?>
		<?= $eleve['Prenom'] ?></h1>
<div><img src="<?= $eleve['Photo'] ?>"></div>
<div>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<ul>
		<li><b>Adresse :</b><input type="text" name="Adresse"></li>
		<li><b>Ville :</b><input type="text" name="Ville"></li>
		<li><b>email :</b><input type="text" name="email"></li>
	</ul>
	<input type="hidden" name="id" value="<?=  $_GET['id']?>">
	<input type="hidden" name="cne" value="<?=  $eleve['CNE']?>">
	<input type="submit" name="submit" value="valide">
	</form>
	<a href="index.php"><button>revenir</button></a>
</div>
<?php $contenu = ob_get_clean();
require_once 'Vue/gabarit.php';
?>