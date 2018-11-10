<?php
//je redémarre la session pour avoir accès aux infos qui y sont contenues
  session_start();
  //si pas d'utilisateur enregistré dans la session renvoi vers page de connection
    require 'Model/function.php';
    if (!isset($_SESSION['user'])) {
       header("Location: index.php");
     exit;
   }
  //var_dump($_SESSION);// pour vérifier les infos de session//
  $products = getProducts();
  //var_dump($products);// pour vérifier que la fonction retourne les produits
  $id = $_GET["id"];
    ?>


  <?php include 'Template/header.php';?>
    <div class="container"-->
      <div class="row">
    <?php include 'Template/aside.php'; ?>
    <div class="col-lg-9">
      <?php
        foreach ($products as $key => $product) {
          if($product['id'] == $id) {
    ?>
          <article class="card-body">

            <h3 class="card-title"><?php echo $product['name']; ?></h3>
            <p class="card-text"><?php echo $product['description']; ?></p>
          </article>

        <p class="card-text"><?php echo $product['made_in'] ;?></p>
        <p class="card-text"><?php echo $product['category'] ;?></p>
        <p><?php
        if($product["stock"]) {
          echo "en stock";
        }
        else {
          echo "indisponible";
        }
        ?></p>
        <h4><?php echo $product['price']; ?></h4>
        <hr>
        <a href="cartTreatment.php?id=<?php echo $product['id'];?>" class="btn btn-success">Ajouter au panier</a>
        <a href="products.php">Retour</a>
      </div>
    </div>
  </div>

<?php
    }
  }
?>

    <!-- /.card -->
<?php include 'Template/footer.php'; ?>
