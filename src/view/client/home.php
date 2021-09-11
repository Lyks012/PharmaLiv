<?php ob_start(); ?>
<?php require_once('src/view/client/navbarClient.php'); ?>
<h1>Bienvenue <?= $_SESSION['login'] ?></h1>
<?php
$content = ob_get_clean();
require_once('src/view/shared/template.php')
?>
