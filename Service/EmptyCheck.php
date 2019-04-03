<?php
      //vérifie si les entrées de formulaires sont vides
    function CheckentriesEmpty($form) {

      foreach( $form as $key => $value)
        if(empty ($value)){
          return true;
        }
      }


       function checkEntryLength($value, $length) {
              if( strlen($value) < $length) {
                    //je redirige vers index.html et j'affiche un message d'erreur
                    header( 'Location: index.php');
                    exit;
                }
              }

          function checkValuesDiff($value1, $value2) {
            if( $value1 !== $value2) {
              header('Location: index.php');
              exit;
              }
            }
 ?>
