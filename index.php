<!-- Voici la page qui va afficher le formulaire dans le template -->
<!--affichage du header sur toutes les pages-->
<?php include "Template/header.php";
//pour prévenir la faille XSS convertit les caractères spéciaux en entités html//
  if (isset($_GET["message"])) {
  $message = htmlspecialchars ($_GET["message"]);
  echo "<div class='alert alert-danger mt-2 text-center' role='alert'>"  . $message. "</div>" ;
 }
//var_dump($_GET);
?>

<!--main commence ici : initialisé dans le header -->
<!-- formulaire de connexion -->

    <form class="login-form mx-auto mt-5 w-50 " action="login.php" method="post">
      <div class="form-group">
        <h1 class="h3 mb-3 font-weight-normal">Merci de vous identifier</h1>
      </div>
      <div class="form-group">
        <label for="text" class="sr-only">Votre nom:</label>
        <input type="text" id="name" name="name" class="form-control" required="" autofocus="">
      </div>
      <div class="form-group">
        <label for="password">Votre mot de passe:</label>
        <input type="password" id="Password" name="password" class="form-control" required="" autofocus="">
      </div>
     <div class="form-group">
      <label><input type="checkbox" value="Se souvenir de moi">Se souvenir de moi</label>
    </div>
    <!--  remerber me php?-trouver la méthode cookie?-->
    <div class="form-group">
       <button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer</button>
    </div>
  </form>
</div>
</main>

<?php include 'Template/footer.php'; ?>
