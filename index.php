<!--affichage du header sur toutes les pages-->
<?php include "Template/header.php";
//pour prévenir la faille XSS convertit les caractères spéciaux en entités html//
    if (isset($_GET["message"])) {
        $message = htmlspecialchars ($_GET["message"]);
        echo "<div class='alert alert-danger mt-2 text-center' role='alert'>"  . $message. "</div>" ;
      }
    //var_dump($_GET);
?>
<!--main (initialisé dans le header) -->
<!-- formulaire de connexion -->
  <section class="container-fluid ">
    <div class="container">
            <div class="col-md-12">
                <div class="row">
                  <!--formulaire de connexion-->
                    <form class="mx-auto col-md-6 " action="login.php" method="post">
                      <div class="card border-secondary">
                        <div class="form-group card-header pb-6">
                            <h3 class="mb-0 font-weight-bold">Merci de vous identifier</h3>
                        </div>
                      </div>
                      <div class="card-body"> 
                        <div class="form-group">
                          <p class="mt-4">
                           <label for="text">Votre nom:</label>
                          </p>

                          <input type="text" id="name" name="name" class="form-control" required="" autofocus="">
                        </div>
                        <div class="form-group">
                          <label for="password">Votre mot de passe:</label>
                          <input type="password" id="Password" name="password" class="form-control" required="" autofocus="">
                        </div>
                        <div class="form-group">
                          <label><input type="checkbox" value="Se souvenir de moi">Se souvenir de moi</label>
                        </div>
                      <!--  remember me php?-trouver la méthode cookie?-->
                        <div class="form-group">
                          <button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer</button>
                        </div>
                      </div> 
                    </form>
                    <!--formulaire d'inscription-->
                    <form class="col-md-6 mx-auto">
                      <div class="card border-secondary">
                        <div class="card-header">
                          <h3 class="mb-0 my-2">S'enregistrer</h3>
                        </div>
                        <div class="card-body">
                          <form class="form" action= 'register.php' method="post" role="form" autocomplete="off">
                            <div class="form-group">
                              <label for="name" >Nom</label>
                              <input type="text" class="form-control" id="name" name ='name' placeholder="Votre nom (3 caractères min.)">
                            </div>

                            <div class="form-group">
                              <label for="password" >Mot de passe</label>
                              <input type="password" class="form-control" id="password" name ='password' placeholder="Mot de passe 6 caractères min. un chiffre et une lettre en capitale" title="6 caracteres minimum avec un chiffre et une lettre en capitale" required="">
                            </div>
                            <div class="form-group">
                              <label for="PasswordVerify">Vérification du mot de passe</label>
                            <input type="password" pattern="(?=.*\d)(?=.*[A-Z]).{6,}" class="form-control" id="PasswordVerify" title="6 caracteres minimum avec un chiffre et une lettre en capitale" placeholder="Répéter le mot de passe" required="">
                          </div>
                            <div class="form-group">
                              <button type="submit" name="subscribe" class="btn btn-lg btn-primary btn-block">S'enregistrer</button>
                            </div>

                          </form>
                      </div>
                    </div>
    </form>
                </div>
                <!--/row-->
              </div>
              <!--/col-->
          </div>
<!--main close in footer-->
<?php include 'Template/footer.php'; ?>
