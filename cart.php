<?php
session_start();
include"Template/header.php";
include"Template/aside.php";
require 'Model/function.php';
$products = getProducts();
?>
<?php
//parcourre le tableau $products contenu dans getProducts()
//analyse le contenu de chaque clé et sa valeur//
 foreach ($_SESSION['panier'] as $key =>$product){//je ferme la balise php après l'accolade pour pouvoir ecrire mon html normalement
  ?>
<div class="card mb-4 shadow-sm">
  <div class="card-header">
    <h4 class="my-0 font-weight-normal"><?php echo $product["name"] ?></h4>
</div>
<div class="card-body">
  <h1 class="card-title pricing-card-title">Prix : <?php echo $product["price"] ?> <small class="text-muted">€</small></h1>
  <ul class="list-unstyled mt-3 mb-4">
    <li><?php echo $product["description"] ?></li>
    <li>Lieu de production: <?php echo $product["made_in"] ?></li>
    <li>Catégorie : <?php echo $product["category"] ?></li>
  </ul>
</div>
</div>
<?php
}
include"Template/footer.php";
?>
