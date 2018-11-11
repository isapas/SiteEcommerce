<?php
      //vérifie si les entrées de formulaires sont vides
    function CheckentriesEmpty() {
      foreach( $_POST as $key => $value)
        if(!$value){
          return true;
        }
      }

  /*        function CheckEntriesOk(){
            //fonction qui appelle toutes les fonctions qui check la validité des entrées de formulaire
/*            function checkNameEntry() {
              if((isset($_POST|['name'] ) && (strlen($_POST['name']) < 3)) {
                    //je redirige vers index.html et j'affiche un message d'erreur
                    header( 'Location = index.php')
                    echo $_GET['message'];
                }
          }
          function  checkPasswordEntry() {
            if(isset($_POST['password'])) {

            }


            }


*/
 ?>
