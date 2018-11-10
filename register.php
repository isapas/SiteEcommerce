<?php
if(CheckentriesEmpty($_POST)) {


  //je verifie si le formulaire n'est pas vide
  //if(!isset($_post) || !isset($_POST['name']) || !isset($_POST['password']) || !isset($_POST['VerifyPassword'])) {

  ////  header(index.php);
    echo "Merci de remplir tous les champs de formulaire";
}
  //je vérifie que le champ de nom contient au moins 3 caractères
  if(strlen($_POST['name'])) {
      //je redirige vers index.html et j'affiche un message d'erreur
      echo "Merci d'entrer un nom valide";
  }

  if (isset($_POST['name'])) htmlspecialchars($_POST['name']) {

  }


  //je vérifie que les champ de mot de passe  comportent au moins 6 caractères, une lettre majuscule et un chiffre
  if(!isset($_post['password']) && isset($_POST['VerifyPassword'])){
    // j'envoie un message d'erreur et recharge le formulaire
  }
    //je vérifie que les deux mots de passes sont identiques
    if()


  //je vérifie qu'une des case sexe a bien été cochée


?>
