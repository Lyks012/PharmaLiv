<?php

extract($data);
ob_start();
require_once('src/view/client/navbarClient.php');
?>

<h1>Effectuer une nouvelle commande</h1>
<form action="index.php?action=newOrder" method="post" enctype="multipart/form-data">
 <div>
   <label for="file">Sélectionner le fichier à envoyer</label>
   <input class="form-control" type="file" name="prescriptionImage" accept="image/png, image/gif, image/jpeg" />
   <select class="form-select" name="drugstoreId">
       <option>Choisisse une pharmacie</option>
   <?php
   foreach($sectors as $sector)
   {
       $drugstores = $sector->getDrugstores()->getValues();
       ?>
        <optgroup label="<?= $sector->getVille().", ".$sector->getCommune() ?>">
        <?php
            foreach($drugstores as $drugstore)
            {
                ?>
                <option value="<?= $drugstore->getId() ?>"><?= $drugstore->getName() ?></option>
                <?php
            }
        ?>
        </optgroup>
       <?php
   }
   ?>
   </select>
 </div>
 <div>
   <button class="btn btn-success">Envoyer</button>
 </div>
</form>

<table class="table table-bordered table-hover table-responsiv">
<thead class="table-dark">
    <tr>
        <th scope="col">Ordonnance</th>
        <th scope="col">Date</th>
        <th scope="col">Prix</th>
        <th scope="col">Pharmacie</th>
        <th scope="col">Paiement</th>
        <th scope="col">Contenu</th>d
    </tr>
    </thead>
    
    <?php /*
    for($i = 0; $i < sizeof($orders); $i++){
        extract($orders[$i]);
        ?>
        <tr>
            <td><?= $path_to_picture ?></td>
            <td><?= $date ?></td>
            <td><?= $price ?></td>
            <td><?= $name ?></td>
            <td><?= $payment_method ?></td>
            <td></td>
        </tr>
        <?php

        /////////////Display order details
            //////last cell button to display drugs
    }*/
    ?>
    
</table>
<?php $content = ob_get_clean(); ?>
<?php require_once('src/view/shared/template.php') ?>