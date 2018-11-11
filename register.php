<?php
if(CheckentriesEmpty($_POST)) {
    header(index.php);
    echo "<p>Merci de remplir tous les champs de formulaire</p>";
}
  //je vérifie que le champ de nom n'est pas vide et qu'il contient au moins 3 caractères
  if (isset($_POST['name'])) {
    //htmlspecialchars($_POST['name']); ici?
    if(strlen($_POST['name']) < 3) {
      //je redirige vers index.html et j'affiche un message d'erreur

        echo "<div<
                <p>Merci d'entrer un nom valide</p>
              </div>";
        }
  }


  //je vérifie que les champ de mot de passe  comportent au moins 6 caractères, une lettre majuscule et un chiffre
  if(isset($_post['password']) == isset($_POST['VerifyPassword'])){
    // j'envoie un message d'erreur et recharge le formulaire
  }
    //je vérifie que les deux mots de passes sont identiques
  //  if()


  //je vérifie qu'une des case sexe a bien été cochée


?>
