<?php
  //je verifie: si elle est vide ça signifie que je ne suis pas connecté retour vers la page connexion//
session_start();
  if (empty($_SESSION)) {
       header("Location: index.php");
     } // affiche une erreur de session deja connecté

  //var_dump($_SESSION); pour vérifier les infos de session//

include("Template/header.php");
//appelle la fonction qui contient la base de donnée des membres//
require 'function.php';
$products = getProducts();
//var_dump($products);//
?>
<main>
 <div class="container-fluid">
   <!-- Aside -->
   <?php
     include("Template/aside.php");
   ?>
   <!-- section qui contient mes fiches produits -->

     <section class="row"> <!--initialise une grille à 12 colonnes 100% du viewport-->
       <div class="card-group container">   <!--container des fiches produits  -->
         <div class="row">
         <!--insère chaque fiche produit existante dans getProducts dans un tempplate de productcard-->
         <?php
         //parcours le tableau $products contenu dans getProducts()//
         //analyse le contenue de chaque clé et sa valeur//
         foreach ($products as $key =>$productdetail){
           //affiche un template de fiche produit pour chaque tableau contenus dans getProducts et affiche pour chacun la valeur de la clé appelée//
           echo '<div class="col-4 ">
                    <article class="card mb-3"
                      <img class="card-img-top" src="tile.png" alt=""' . $productdetail['name'] . '>
                      <div class="card-body">
                         <h5  class="card-title">' . $productdetail['name'] . '</h5>
                         <p class="card-text text-center">'. $productdetail['price'] . '</p>
                         <a href="singleprod.php?id='  . htmlspecialchars($productdetail['id']) . ' class="btn btn-primary"> Voir ce produit</a>
                      </div>
                      </article>
                    </div>';
          }
         ?>
       </div>
     </section>
 </div>
</main>

<?php include("Template/footer.php")?>
