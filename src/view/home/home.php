<?php ob_start(); ?>
<?php require_once('src/view/home/navbar.php'); ?>
<div class="jumbotron text-center bg-light bg-overlay">
    <div class="container py-5">
        <h1 class="display-3">Bienvenue a PharmaLiv</h1>
        <p class="lead">Votre Pharmacie a portee de main</p>
    </div>
</div>
<div class="container mt-5">
    <h2 class="text-center">Rejoinez nous</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <h3>Devenir client</h3>
            <p>En tant que client, vous allez :</p>
            <ul>
                <li>Avoir un espace de connexion securise</li>
                <li>Sauvegarder votre attestation assurance maladie</li>
                <li>Choisir la pharmacie la plus proche de vous</li>
                <li>Nous envoyer votre ordonnace en photo et la pharmacie s'occupe du reste</li>
                <li>Choisir la date de livraison et les modalites de paiements</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Pharmacie partenaire</h3>
            <p>En tant que client, vous allez :</p>
            <ul>
                <li>Disposer d'un espace personnel</li>
                <li>Recevoir une notification lorsqu'un client vous envoie son ordonnace</li>
                <li>Remplir son panier et le lui envoyer pour confirmation </li>
                <li>Faire un suivi de vos ventes</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Livreur</h3>
            <p>En tant que livreur, vous allez :</p>
            <ul>
                <li>Definir vos zones de livraison</li>
                <li>Recevoir un sms a chaque nouvelle commande a livrer</li>
            </ul>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require_once('src/view/shared/template.php');
?>
