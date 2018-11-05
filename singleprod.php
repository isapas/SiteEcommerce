<?php
  //déclare où trouver les informations dont on a besoin//
  include 'Template/header.php';
?>
    <div class="container"-->
      <div class="row">
    <?php include 'Template/aside.php'; ?>
    <div class="col-lg-9">
      <?php
      foreach ($products as $product){//je ferme la balise php après l'accolade pour pouvoir ecrire mon html normalement
        ?>
        <!--aside qui contient une photo du produit et son id à gauche  -->
      <aside class="card mt-4">
        <img class="card-img-top img-fluid" src="#" alt="">
        <p class="card-text"><<?php echo $product['id'] ?></p>
        </aside>
        <!--à gauche  -->
          <article class="card-body">

            <h3 class="card-title"><?php echo $product["name"] ?></h3>
            <p class="card-text"><<?php echo $product['description'] ?></p>
          </article>

        <p class="card-text"><?php echo $product['made_in'] ?></p>
        <p class="card-text"><?php echo $product['category'] ?></p>
        <h4><?php echo $product["price"] ?></h4>
        <hr>
        <a href="card.php" class="btn btn-success">Ajouter au panier</a>
        <button type="btn" name="retour"><a href="products.php">Retour</a></button>
      </div>
    </div>
  </div>
    <!-- /.card -->
    <?php
}
?>
<?php include 'Template/footer.php'; ?>
