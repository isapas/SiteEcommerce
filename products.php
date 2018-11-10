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
  $products = getProducts();

  //var_dump($products);// pour vérifier que la fonction retourne les produits
?>

 <div class="row mt-5">
   <!-- Aside --
   <?php
     include "Template/aside.php";
   ?>
   <!-- section qui contient mes fiches produits -->

     <section class="col-lg-9"> <!--initialise une grille à 12 colonnes 100% du viewport-->
       <div class="card-group container">   <!--container des fiches produits  -->
         <div class="row">
         <!--insère chaque fiche produit existante dans getProducts dans un tempplate de productcard-->
         <?php
         //parcourre le tableau $products contenu dans getProducts()
         //analyse le contenu de chaque clé et sa valeur//
          foreach ($products as $key =>$product){//je ferme la balise php après l'accolade pour pouvoir ecrire mon html normalement

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
       //On ferme la boucle en enserrant l'accolade
         }
        ?>
      </div>
    </div>
  </section>
 </div>

<?php
include 'Template/footer.php'
?>
