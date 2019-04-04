
<?php
  session_start();
  //Si aucun utilisateur est enregistré en session on renvoi à l'acceuil
  if(!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
  }
  //chargement des fonctions et du templates du header
  include "Template/header.php";
  require "Model/function.php";
  //recupère toous les produits et les stocke dans la variable $products
  $products = getProducts();
  //var_dump($products);
  //stocke l'id récupérée dans l'url dans une variable $id
  $id = intval(htmlspecialchars($_GET["id"]));
  //var_dump($id);
  //récupère le produit stocké à l'id récupéré par l'url et le stocke dans une variable $product
  $product = getProduct($id);
  //var_dump($product);
  if (isset($_GET["msg"])) {
    $msg = $_GET("msg");
  }
  ?> 

  <div class="container-fluid">
    <div class="row">
      <section class="col-lg-6 mr-4">
        <div class="row">
          <?php
            if ($product["id"] == $id) { ?>
              <h2><?php echo $product["name"];?></h2>
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
            echo "<a href='cartTreatment.php?id=". $id . "&action=add' class='btn lightBg my-3'>Ajouter au panier</a>";
                     if (isset($_GET["msg"]) && $_GET["msg"] === "succes") { ?>
                        <div class='alert alert-success text-center' role='alert'>
                           L'article est ajouté au panier avec succès.
                        </div>
                      <?php 
                     } 
          }
          }
          ?>

      </div>
       
    </section>
    <!-- Aside avec les informations utilisateur -->
       <?php include "Template/aside.php"; ?>
    </div>
    </div>
 <?php
 include "Template/footer.php"
  ?>
