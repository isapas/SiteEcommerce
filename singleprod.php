<?php
//je redémarre la session pour avoir accès aux infos qui y sont contenues
  session_start();
  //si pas d'utilisateur enregistré dans la session renvoi vers page de connection
    if (!isset($_SESSION['user'])) {
       header("Location: index.php");
     exit;
   }
  //var_dump($_SESSION);// pour vérifier les infos de session//

  //déclare où trouver les informations dont on a besoin//
  include 'Template/header.php';
  ?>
    <div class="container"-->
      <div class="row">1
    <?php include 'Template/aside.php'; ?>
    <div class="col-lg-9">
      <?php
      require 'Model/function.php';
      $products = getProducts();
      //var_dump($products);// pour vérifier que la fonction retourne les produits
      $id = $_GET["id"];

        foreach ($products as $key => $product) {
          if ($product['id'] == $id) {
    ?>
        <!--aside qui contient une photo du produit et son id à gauche  -->
      <aside class="card mt-4">
        <img class="card-img-top img-fluid" src="#" alt="logo">
        <p class="card-text"><?php echo $product['id'] ?></p>
        </aside>
        <!--à gauche  -->
          <article class="card-body">

            <h3 class="card-title"><?php echo $product['name'] ?></h3>
            <p class="card-text"><?php echo $product['description'] ?></p>
          </article>

        <p class="card-text"><?php echo $product['made_in'] ?></p>
        <p class="card-text"><?php echo $product['category'] ?></p>
        <h4><?php echo $product['price'] ?></h4>
        <hr>
        <a href="card.php" class="btn btn-success">Ajouter au panier</a>
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
