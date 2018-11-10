<?php
  //fonction qui crée un panier, appelée quand l'utilisateur ajoute le premier article au panier
  function CreateBasket() {
    //je verifie que la sessionn'existe pas
    if (!isset($_SESSION['panier'])) {
      //ma session basket est un panier vide
      $_SESSION ['panier'] = array();
      }
  }

   function AddToCart($product) {
      //je vérifie si le panier a été créé et s'il n'est pas vérouillé
      if (isset($_SESSION['panier'])) {
        if($product['stock']){
          array_push($_SESSION['panier'], $product);
     }
  }
}
    //je crée une fonction pour enlever un ou plusieurs produits du panier

  /*  function removeProduct( $name, $price,$quantity) {
      //je vérifie que des produits sont présents dans le panier
      if(!isset($_SESSION['panier']))  {
        $tempCart = array();
        $tempCart['name'] = array();
        $tempCart['price'] = array();
        $tempCart['quantity'] =array();

          for($i= 0; $i<count($_SESSION['panier']['name'] [$i] !== $name)){
            array_push($tempCart, $_SESSION['panier']['name'],$i);
            array_push( $tempCart$_SESSION['panier']['quantity'],$i);
            array_push( $_SESSION['panier']['price'],$i);
      }
      }
      //
    }
*/







 ?>
