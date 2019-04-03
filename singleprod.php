<?php

session_start();

//Si aucun utilisateur est enregistré en session on renvoi à l'acceuil
if(!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}
//chargement des fonctions et du templates du header
require "Model/function.php";
include "Template/header.php";

//récupère l'id dans l'url
$id = intval(htmlspecialchars($_GET["id"]));
//récupère le produit stocké à l'id récupéré par l'url et le stocke dans une variable $product
$product = getProduct($id);
 ?>

 <div class="row col-lg-12 ">
       <!-- Aside avec les informations utilisateur -->
    <?php include "Template/aside.php"; ?>
    <section class="col-lg-6 mr-8">
      <h2><?php echo $product["name"]; ?></h2>
      <div class="container-fluid">
        <?php echo $product["description"]; ?>
      </div>
      <div>
        <span class="badge badge-secondary">Prix : <?php echo $product["price"] ?>€</span>
        <?php
        if($product["stock"]) {
          echo "<span class='badge badge-success'>Disponible</span>";
        }
        else {
          echo "<span class='badge badge-danger'>Indisponible</span>";
        }
         ?>
        <span class="badge badge-secondary">Catégorie : <?php echo $product["category"] ?></span>
        <span class="badge badge-secondary">Lieu de production :<?php echo $product["made_in"] ?></span>
      </div>
      <?php
        //Si le produit est disponible on met un boutton d'ajout au panier
        if($product["stock"]) {
          echo "<a href='cardTreatment.php?id=". $id . "&action=add' class='btn lightBg my-3'>Ajouter au panier</a>";
        }
       ?>
    </section>

  </div>

 <?php
 include "Template/footer.php"
  ?>
