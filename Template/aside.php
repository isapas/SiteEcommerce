<!-- Ici démarre le code de votre aside -->
<!--je veux que les informations contenues dans la sessions de l'utilistaeur connceté soient affichées dans les éléments de la listes correspondants-->
<?php
//var_dump($_SESSION['user']);?>

<aside class=" col-lg-3">
  <h3>Informations de compte</h3>

    <ul class="list-group">
  <?php
    foreach ($_SESSION['user'] as $key => $value) {

      echo "<li class='list-group-item'>".  $key . ":"." " .$value . "</li>";
      }

  ?>
    </ul>
 </aside>
