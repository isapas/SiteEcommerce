<?php
//je redémarre la session pour avoir accès aux infos qui y sont contenues
  session_start();
  //si pas d'utilisateur enregistré dans la session renvoi vers page de connection
    if (!isset($_SESSION['user'])) {
       header("Location: index.php");
     exit;
   }
  //var_dump($_SESSION);// pour vérifier les infos de session//

  //appelle la fonction qui contient la base de donnée des membres//
//  if(!function_exists('getProducts')) {  }
  include 'Template/header.php';
//je récupère mon tableau de produits via la fonction getProducts
  require 'Model/function.php';
  require 'Service/formCleaner.php';

  //récupère les produits et les stocke dans $products
  $products = getProducts();
?>
<div class="container">
 <div class="row mt-5">
  
   <!-- section qui contient mes fiches produits -->
     <section class="col-lg-7"> 
       <div class="card-group ">  
         <div class="row">
         <?php
         
          foreach ($products as $key =>$product){
           ?>
        <!-- affiche un template de fiche produit pour chaque tableau contenus dans getProducts et affiche pour chacun la valeur de la clé appelée -->
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
            <li>
              <?php
              if($product["stock"]) {
                echo "en stock";
              }
              else {
                echo "indisponible";
              }
              ?>
            </li>
          </ul>
        <?php
          echo "<a href='singleprod.php?id=" . $product['id'] . "'>détail</a>";?>
        </div>
      </div>
      <?php
         }
        ?>
    </div>
  </section>
   <!-- Aside -->
   <?php
     include "Template/aside.php"; 
    ?>
  </div>
  </div>
<?php
  include "Template/footer.php";
?>
