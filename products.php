<?php
//  session_start();// je commence une session//
  //je verifie: si elle est vide ça signifie que je ne suis pas connecté retour vers la page MongoWriteConcernException//
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

<!--main sans margin top et bottom -->
<main>
 <div class="container-fluid">
   <!-- Aside -->
   <?php
     include("Template/aside.php");
   ?>
   <!-- section qui contient mes fiches produits -->
   <!--container des fiches produits  -->
     <section class="row">
       <div class="card-group container">
         <div class="row">
         <!--insère chaque fiche produit existante dans getProducts dans un tempplate de productcard-->
         <?php
         //parcours le tableau $products contenu dans getProducts()//
         //analyse le contenue de chaque clé et sa valeur//
         foreach ($products as $key =>$value){
           //affiche un template de fiche produit//
             echo '<div class="col-4 ">
                   <article class="card mb-3"
                     <img class="card-img-top" src="tile.png" alt=""' . $value["name"] . " image>
                     <div class='card-body'>
                       <h5  class='card-title'>" . $value['name'] . '</h5>
                       <p class="card-text text-center">'. $value["price"] . '</p>
                       <a href="singleprod.php?id='  . htmlspecialchars($value["id"]) . ' class="btn btn-primary"> Voir ce produit</a>
                     </div>
                   </div>';               }
          ?>
        </div>
       </div>
     </section>
 </div>
</main>

<?php include("Template/footer.php")?>
