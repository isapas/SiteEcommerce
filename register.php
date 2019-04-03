<?php
require 'Service/EmptyCheck.php';
var_dump($_POST);
if(CheckentriesEmpty($_POST)) {
    header('Location: index.php');
}
checkEntryLength($_POST['name'], 3);
checkValuesDiff($_POST['password'], $_POST['PasswordVerify']);
header("Location: index.php?message=Bravo vous avez été inscrit avec succès. Merci de vous connceter");
?>
