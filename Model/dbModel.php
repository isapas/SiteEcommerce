<?php
//db connect
function dbConnect($db) {
  try {
    $db = new PDO('mysql:host=localhost;dbname=EcommercePhp;charset=utf8', 'isabelle', 'test123');
  }
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
}
?>
