<?php
session_start();
include"Template/header.php";
include"Template/aside.php";
require 'Model/function.php';
$products = getProducts();
?>
<?php

 foreach ($_SESSION['panier'] as $key =>$product){
  ?>
  <div class="row mt-5">
    <!-- Aside -->
   <?php
     include "Template/aside.php";
   ?>
 <!-- products cards -->
    <section class="col-lg-9">
      <h2>Votre Panier : </h2>
      <div class="container-fluide">
        <div class="row">
          <?php
            //On boucle pour afficher tous les produits contenus dans la variable products
            foreach ($_SESSION["panier"] as $key => $product) {
          ?>
          <!-- affiche un template de fiche produit pour chaque tableau contenus dans getProducts et affiche pour chacun la valeur de la clé appelée -->
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php echo $product["name"] ?></h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Prix : <?php echo $product["price"] ?> 
            <small class="text-muted">€</small>
          </h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><?php echo $product["description"] ?></li>
            <li>Lieu de production: <?php echo $product["made_in"] ?></li>
            <li>Catégorie : <?php echo $product["category"] ?></li>
            <li>
              <?php
              if($product["stock"]) {
                echo "en stock";
              }
              ?>
            </li>
          </ul>
        <?php
          echo "<a href='single.php?id=" . $product['id'] . "'>détail</a>";
          echo "<a href='CardTreatmentUnset.php?key=" . $key . "' class='btn btn-success ml-5'>Supprimer</a>";
        ?>
        </div>
      </div>
      <?php
     }
   }

        ?>
        </div>
      </div>
    </section>
 </div>

<?php
include 'Template/footer.php'
?>
