<!-- Ici démarre le code de votre aside -->
<!--je veux que les informations contenues dans la sessions de l'utilistaeur connceté soient affichées dans les éléments de la listes correspondants-->
<?php
  require 'function.php';
 ?>
<div class="container">
<aside class="row col-3">
  <h3>Informations de compte</h3>
    <ul class="list-group">
  <?php
      echo '
        <li class="list-group-item">Bonjour' . $_SESSION['user']['name'] . '</li>
        <li class="list-group-item">Vous êtes' . $_SESSION['user']['status'] . '</li>
        <li class="list-group-item">Vous êtes un/une' . $_SESSION['user']['sexe'] . '</li>;'
  ?>
    </ul>
 </aside>
</div>
