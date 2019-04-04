<?php
session_start();
//verifie que l'utilisateur est connecté sinon renvoie à l'accueil
if(!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}
include"Template/header.php";
require 'Model/function.php';

if(isset($_GET["success"])) {
  $msg = htmlspecialchars($_GET["success"]);
  echo "<div class='alert alert-success w-50'>" . $msg . "</div>";
}
  ?>

  <div class="row mt-5"> 
    <!-- products cards -->
    <section class="col-lg-9">
        <h2>Votre panier : </h2>
        <div class="container-fluide">
        <div class="row">
          <?php
          //affichage de tous les produits contenus dans la variable products
            foreach ($_SESSION["cart"] as $key => $product) {
          ?>
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
              echo "<a href='CartTreatmentUnset.php?key=" . $key . "' class='btn btn-success ml-5'>Supprimer</a>";
            ?>
        </div>
      </div>
        <?php
          }
        ?>
        </div>
      </div>
    </section>
     <!-- Aside -->
    <?php
     include "Template/aside.php";
    ?>
 </div>

<?php
include 'Template/footer.php'
?>
