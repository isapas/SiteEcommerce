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
      <div class="row">
    <?php include 'Template/aside.php'; ?>
    <div class="col-lg-9">
      <?php
      require 'Model/function.php';
      $products = getProducts();
      //var_dump($products);// pour vérifier que la fonction retourne les produits

    //  foreach ($products as $product => $key){//je ferme la balise php après l'accolade pour pouvoir ecrire mon html normalement
        ?>
        <!--aside qui contient une photo du produit et son id à gauche  -->
      <aside class="card mt-4">
        <img class="card-img-top img-fluid" src="#" alt="logo">
        <p class="card-text"><?php echo $_SESSION['product']['id'] ?></p>
        </aside>
        <!--à gauche  -->
          <article class="card-body">

            <h3 class="card-title"><?php echo $_SESSION['product']["name"] ?></h3>
            <p class="card-text"><?php echo $_SESSION['product']['description'] ?></p>
          </article>

        <p class="card-text"><?php echo $_SESSION['product']['made_in'] ?></p>
        <p class="card-text"><?php echo $_SESSION['product']['category'] ?></p>
        <h4><?php echo $_SESSION['product']["price"] ?></h4>
        <hr>
        <a href="card.php" class="btn btn-success">Ajouter au panier</a>
        <button type="btn" name="retour"><a href="products.php">Retour</a></button>
      </div>
    </div>
  </div>
    <!-- /.card -->

?>
<?php include 'Template/footer.php'; ?>
