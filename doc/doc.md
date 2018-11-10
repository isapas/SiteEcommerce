
<?php
//On crée un fonction pour supprimer des produits du panier
Function SupprimerProduits($produits_a_supprimer)
{
    //On crée un panier temporaire, dans lequel on "recopiera" le vrai panier sans les produits à supprimer. Ainsi, on évite d'avoir des entrées avec des valeurs égales à NULL, ce qui ferait bordélique. On crée un nouveau panier tout beau, tout propre.
    $panier_temporaire = array();
    $panier_temporaire['id_produit'] = array();
    $panier_temporaire['prix_produit'] = array();
    $panier_temporaire['quantite_produit'] = array();

    //On parcoure le panier
    foreach($_SESSION['panier']['id_produit'] as $cle => $id_produit)
    {
        $toDelete = 0;
        for($i=0; $i<count($produits_a_supprimer); $i++)
            if($id_produit == $produits_a_supprimer[$i])
                   $toDelete = 1;
        if($toDelete == 0) //Si apres parcours de tous les éléments du tableau on ne veut pas supprimer l'élément :
        {
            array_push ($panier_temporaire['id_produit'], $_SESSION['panier']['id_produit'][$cle]);
            array_push ($panier_temporaire['prix_produit'], $_SESSION['panier']['prix_produit'][$cle]);
            array_push ($panier_temporaire['quantite_produit'], $_SESSION['panier']['prix_produit'][$cle]);
        }
    }

    $_SESSION['panier'] = $panier_temporaire; //On recopie le panier temporaire dans le vrai panier.

    unset($panier_temporaire); //On supprime le panier temporaire.
}
?>
