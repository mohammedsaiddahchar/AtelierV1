<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Gestion des élèves</title>
    </head>
<body>
    <?php
       $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '');
       $eleves = $bdd->query('select CNE,Nom,Prenom,Adresse,Ville,email, Photo, etat from eleves');
    ?>        	
<div id="global">
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
	</tr>
<?php
foreach ($eleves as $eleve) :
	$et="";
	$lien="";
	if($eleve["etat"]=="true")
	{
		$et="active";
		$lien="activer.php?cne=".$eleve["CNE"]."&etat=false";
	}
	else
	{
		$et="desactive";
		$lien="activer.php?cne=".$eleve["CNE"]."&etat=true";
	}
	?>
		<tr>
		<td><?=  $eleve["CNE"]; ?></td>
		<td><?=  $eleve["Nom"]; ?></td>
		<td><?=  $eleve["Prenom"]; ?></td>
        <td><?=  $eleve["Adresse"]; ?></td>
        <td><?=  $eleve["Ville"]; ?></td>
        <td><?=  $eleve["email"]; ?></td>
        <td><?=  $eleve["Photo"]; ?></td>
		<td><a href="<?=  $lien; ?>"><?=  $et; ?></a></td>
	</tr>
<?php endforeach; ?>
	
</table>	
</div>
</body>
</html>
