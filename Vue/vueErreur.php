<?php $titre = 'Gestion des élèves';
ob_start(); ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php
$contenu = ob_get_clean();
require_once 'Vue/gabarit.php';