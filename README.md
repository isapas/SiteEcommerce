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
