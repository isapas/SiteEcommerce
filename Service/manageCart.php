<?php
  //fonction qui crée un panier, appelée quand l'utilisateur ajoute le premier article au panier
  function CreateCart() {
    //je verifie que la session'existe pas
    if (!isset($_SESSION['panier'])) {
      //ma session cart est un panier vide
      $_SESSION ['panier'] = array();
      }
  }

   function AddToCart($product) {
      //je vérifie si le panier a été créé et s'il n'est pas vérouillé
      if (isset($_SESSION['panier'])) {
        if($product['stock']){
          array_push($_SESSION['panier'], $product);
          }
         else {
           CreateCart();
           if($product['stock']){
             array_push($_SESSION['panier'], $product);
            }
        }
      }
    }
    ?>
    <?php
    //je crée une fonction pour enlever un ou plusieurs produits du panier

    function removeProduct() {
      //je récupère l index  de mes données
        $id = $_GET["id"];
        unset($_SESSION["panier"][$id]);
        header('Location: cart.php');
        exit;
      }
?>
