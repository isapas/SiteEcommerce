<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php
require 'function.php';
$users= getUsers();
//if (isset($_POST['name']) && isset($_POST['password'])) {
//var_dump ()$users);
//pour la sécurité les données entrées dans par l'utilisateur sont transformées en majuscule//
  foreach ($_POST as $key => $value) {
  $_POST[$key] = mb_strtoupper("$value") ;
  }
//les données contenues dans le  tableau $users est transformé en capiltales //
  foreach ($users as $key => $user) {
    $user['name'] = mb_strtoupper($user['name']);
    $user['password'] = mb_strtoupper($user['password']);
  //parcoure le tableau contenant les utilisateurs et verifie si les données entrées par l'utilisateur existent dans le tableau et corresponent à leur valuer//
      if ($user['name'] === $_POST['name'] && $user['password'] === $_POST["password"]) {
        session_start();
        $_SESSION['user'] = $user;
        header("Location: products.php");//redirige vers la page products.php//
        exit;
      }
      else
        header("Location: index.php?message=Merci de renseigner des identifiants valides");
        exit; //recharge la page de connection en demandant de renseigner a nouveau les infos dans la barre d'adresse//
  }
?>
