<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php
//je charge le fichier qui contient les fonctions qui renvoient les données
  require 'Model/function.php';
  require 'Service/manageCart.php';
//je verifie queles champs ne sont pas vides
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {//les informations postées par l'utilisateur sont sécurisées
}
  $users =getUsers();//récupère les utilisateurs stockés dans la fonction getUsers
//var_dump($users);

  foreach ($users as $user) {
  //parcoure le tableau contenant les utilisateurs et verifie si les données entrées par l'utilisateur existent dans le tableau et corresponent à leur valuer//
      if ($user['name'] === $_POST['name'] && $user['password'] === $_POST["password"]) {
        session_start();
        $_SESSION['user'] = $user;
        CreateCart();
        header("Location: products.php");//redirige vers la page products.php//
        exit;
      }

    }
        header("Location: index.php?message=Merci de renseigner des identifiants valides");
        exit; //recharge la page de connection en demandant de renseigner a nouveau les infos dans la barre d'adresse//
  }
?>
