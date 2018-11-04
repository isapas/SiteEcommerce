<?php
  //déclare où trouver les informations dont on a besoin//

  include 'Template/header.php';
?>
<main>
    <?php include 'Template/aside.php'; ?>

  <div class="container-fluid card">
    <div class="container">
      <img class="card-img-top" src="tile.png" alt="Card image cap">
    </div>

    <div class="card-body">
      <h5  class="card-title">name</h5>
      <p class="card-text">description</p>
      <p class="card-text">Made in:</p>
      <p class="card-text">catégorie</p>
      <h6 class="card-text">prix:</h6>
      <button type="btn" name="retour"><a href="products.php">Retour</a></button>
    </div>
  </div>

</main>
<?php include 'Template/footer.php'; ?>
