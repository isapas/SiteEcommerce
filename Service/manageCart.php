<?php
  //fonction qui crée un cart, appelée quand l'utilisateur ajoute le premier article au cart
  function CreateCart() {
    //je verifie que la session'existe pas
    if (!isset($_SESSION['cart'])) {
      //ma session cart est un cart vide
      $_SESSION ['cart'] = array();
      }
  }

   function AddToCart($product) {
      //je vérifie si le cart a été créé et s'il n'est pas vérouillé
      if (isset($_SESSION['cart'])) {
        if($product['stock']){
          array_push($_SESSION['cart'], $product);
          }
         else {
           CreateCart();
           if($product['stock']){
             array_push($_SESSION['cart'], $product);
            }
        }
      }
    }
    ?>
    <?php
    //je crée une fonction pour enlever un ou plusieurs produits du cart

    function removeProduct() {
      //je récupère l index  de mes données
        $id = $_GET["id"];
        unset($_SESSION["cart"][$id]);
        header('Location: cart.php');
        exit;
      }
?>
