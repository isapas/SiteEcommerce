<?php
//var_dump($_SESSION['user']);
?>

<aside class="col-lg-4">
  <i class="fas fa-user-ninja fa-4x mb-3"></i>
  <h3>Informations de compte</h3>
  <ul class="list-group">
  <?php
    foreach ($_SESSION['user'] as $key => $value) {
      echo "<li class='list-group-item'>".  $key . ":"." " .$value . "</li>";
      }
  ?>
  </ul>
  <a href="cart.php" class="my-0">Votre panier</a>
  <ul class="list-group">
    <?php
      //On boucle sur le cart stocké en session pour afficher tous ses produits
      foreach ($_SESSION["cart"] as $key => $product) {
        echo "<li class='w-100'>". $product['name'] . "</li>";
      }
     ?>
     <li class='list-group-item'>Total : <?php echo $_SESSION["cartAmount"]; ?></li>
  </ul>
  <a class="btn-primary" href="logout.php"> Se déconnecter</a>
 </aside>
