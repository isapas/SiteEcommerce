<?php

function userIsRegistered($users, $form) {
  foreach ($users as $user) {
    if($user["name"] === $form["user_name"] && $user["password"] === $form["user_password"]) {
      //Si c'est le cas on démarre une session pour y stocker les informations de l'utilisateur
      startUserSession($user);
      return true;
    }
  }
}

function startUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
}

 ?>
 <?php
function EndUserSession() {
  session_start();
  session_unset();
  session_destroy();
}
?>
