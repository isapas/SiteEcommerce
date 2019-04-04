# SiteEcommerce
exercice: création de site ecommerce avec php 

Un site e-commerce avec un compte utilisateur
Pour ce premier projet vous allez créer un petit site e-commerce dont l’accès est restreint aux
utilisateurs ayant un compte. Pour l’instant, nous n’avons pas encore vu l’usage des bases de
données, vos données seront donc stockées et retournées par des fonctions qui vous sont déjà
données.
Globalement le principe du site est très simple, la page d’accueil est composée d’un formulaire de
connexion. L’utilisateur rentre ses identifiants :
• Si ceux-ci correspondent à un des utilisateurs retournés par la fonction d’accès aux
utilisateurs du site, alors il est redirigé vers une page produits qui affiche tous les produits
retournés par la fonction d’accès aux produits et dans un aside les informations relatives à
son profil utilisateur. Les informations de l’utilisateur sont stockées dans une session
• Si les identifiants rentrés ne correspondent à rien ou que le formulaire n’est pas rempli,
l’utilisateur est renvoyé sur la page d’accueil (celle du formulaire) avec un  d’erreur
adéquat. Les message d’erreur sont transmis par l’url
• Attention la page des produits est inaccessible si l’utilisateur n’est pas authentifié !
• N’oubliez pas de sécuriser les données transmises par le formulaire et l’url
Concrètement vous aurez 3 pages sur votre site :
- Une page index.php qui affiche le formulaire et qui envoie les données vers la page login.php
- Une page login.php qui récupère les données du formulaire et les traite
- Une page products.php qui affiche les produits à l’utilisateur et ses informations personnelles
Dans votre projet, il y aura un dossier Model, contenant un fichier function.php, dans ce fichiers
vous trouverez les fonctions d’accès aux données.
Dans votre projet, il y aura un dossier Template, contenant les fichiers header, footer et aside.php en
effet il faut maintenant commencer à gérer votre template grâce au includes.
Vous utilisez le dossier de travail qui vous est fourni.

Pour aller plus loin :
- Créez la page single qui permet de visualiser les informations d’un produit en détail quand on
clique dessus
- Ajoutez un bouton permettant à l’utilisateur de se déconnecter et revenir au formulaire d’accueil

Compétences acquises :
- Comprendre la notion de framework(bootstrap4)
- Positionner ses éléments sur la grille bootstrap
- Intégrer des composants bootstrap à son projet
- Utiliser les styles bootstrap
- Traiter les données d’un formulaire en PHP 7
- Transmettre des données via l’url
- Gérer une session utilisateur simple
- Rediriger un utilisateur en PHP
- Créer des messages d’erreur
- Créer un template simple en PHP
- Afficher des données
- Utiliser des fonctions de récupération de données

Vous continuez de perfectionner votre site de la semaine précédente. Vous allez y rajouter les
fonctionnalités suivantes :
- Possibilité de se déconnecter via un bouton logout
- Possibilité de visualiser la page affichant les détails d’un produit
- Possibilité d’ajouter un produit au panier utilisateur avec un message de succès
- Possibilité de retirer un produit du panier utilisateur avec un message de succès
- Afficher dans l’aside le contenu du panier
- Afficher le montant total du panier dans l’aside. Ce montant sera réactualiser à chaque ajout/retrait
de produits- Accès à une page spécifique qui liste tous les produits du panier sous forme de carte, chaque
produit a un bouton permettant de retirer du panier
- Permettre à l’utilisateur de s’inscrire sur la site via un formulaire d’inscription. L’utilisateur doit
rentrer son nom, son mot de passe, une confirmation du mot de passe et son sexe. Pour l’instant
vous ne pouvez pas enregistrer cet utilisateur car vous n’avez pas de base de données, vous vérifiez
simplement l’exactitude des informations rentrées.
- Pour être valide le formulaire doit remplir les conditions suivantes :
• Le nom compote au moins 3 caractères
• Le mot de passe et sa confirmation sont identiques
• Le mot de passe comporte au moins 6 caractères, une lettre majuscule et un chiffre
• Tous les champs sont remplis
- Si le formulaire est valide vous renvoyer l’utilisateur sur la page index avec un message de succès.
Si vous avez trouvé des erreurs vous le renvoyez sur la page d’inscription avec un message d’erreur
listant toutes les erreurs trouvées attention les messages sont transmis par l’intermédiaire de
codes erreur. Le formulaire est pré-rempli avec les réponses que l’utilisateur a transmis
précédemment.
