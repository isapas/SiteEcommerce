<?php
  //fonction qui crée un cart, appelée quand l'utilisateur ajoute le premier article au cart
  function CreateCart() {
    //je verifie que la session n'existe pas
    if (!isset($_SESSION['cart'])) {
      //ma session panier est un panier vide
      $_SESSION ['cart'] = array();
      }
  }

   function AddToCart($product) {
      //vérifie si le panier a été créé et s'il n'est pas vérouillé
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
    //une fonction pour enlever un ou plusieurs produits du panier

    function removeProduct() {
      //récupère l index  de mes données
        $id = $_GET["id"];
        unset($_SESSION["cart"][$id]);
        header('Location: cart.php');
        exit;
      }
?>
