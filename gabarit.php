<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title><?= $titre; ?></title>
    </head>
<body>
          	
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
<?= $contenu; ?>
	
</table>	
</div>
</body>
</html>