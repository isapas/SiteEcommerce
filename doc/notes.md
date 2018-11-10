
[PHP] Vérifier le format d'une adresse email

Dans le langage PHP il est parfois nécessaire de vérifier la bonne conformité d'une adresse email. C'est pratique par exemple pour vérifier qu'un utilisateur à indiqué une adresse email correct et non une suite de caractère qui n'a rien à voir. Il existe plusieurs façons en PHP pour vérifier le format d'une adresse email. L'astuce ne permet pas de vérifier que l'adresse email existe, mais de vérifier qu'une chaîne de caractère respecte le même format qu'une adresse email.
Prérequis

Ce tutoriel donne des exemples de code PHP. Pour bien comprendre et appliquer ce qui est expliqué, il faut avoir des notions de bases en PHP.
Utiliser la fonction filter_var()

Fort heureusement, il y a une fonction PHP qui permet de vérifier facilement si une chaine de caractère ressemble à un email. Il s'agit de la fonction filter_var(). Le second paramètre de cette fonction doit être "FILTER_VALIDATE_EMAIL".

    <?php
    //$email = 'test'; // test avec une chaine qui n'est pas une adresse email
    $email = 'test@example.com'; // test avec une chaine qui est une adresse email

    // Vérifie si la chaine ressemble à un email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Cet email est correct.';
    } else {
        echo 'Cet email a un format non adapté.';
    }
    ?>

En utilisant ce code tel quel, le message "Cet email est correct" devrait s'afficher. Il est possible de déplacer les deux slashs de la première ligne à la deuxième ligne, pour tester ce code avec un code qui ne ressemble pas à une adresse email.
Utiliser une expression régulière

Le code précédent peut être réalisé de façon similaire avec une expression régulière (une REGEX). Le code PHP ci-dessous est donc pratiquement identique met utilise une REGEX.

    <?php
    //$email = 'test'; // test avec une chaine qui n'est pas une adresse email
    $email = 'test@example.com'; // test avec une chaine qui est une adresse email

    // Vérifie si la chaine ressemble à un email
    if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
        echo 'Cet email est correct.';
    } else {
        echo 'Cet email a un format non adapté.';
    }
    ?>

En testant ce code PHP, normalement le résultat sera le même que précédemment, la page affichera "Cet email est correct".




Contrôler les entrées d’un formulaire

Il est important de vérifier les champs d’entrées en HTML et de vous assurer qu’ils sont conformes aux formats souhaités. Nous allons découvrir comment contrôler les valeurs des différents éléments d’un formulaire en HTML.
Les champs de saisis

Lorsque vous soumettez un formulaire, les valeurs des champs de saisis de type text ou multiligne (balise textarea) sont directement récupérables dans le tableau $_POST[].

Code HTML

    <label>Nom : </label> <input type="texte" name="nom">
    <label>Message : </label> <textarea name="message"></textarea>

Récupération en php

    $recupNom = $_POST['nom'];
    $recupMessage = $_POST['message'];

Si le champ n’est pas rempli, PHP récupère une valeur vide. Pour contrôler que du contenu est présent, il faut faire un test dessus :

    $recupNom = $_POST['nom'];
    $recupMessage = $_POST['message'];
    if($recupNom != "" && $recupMessage != ""){ // si les saisies ne sont pas vides

    }

 Ne mettez pas d’espace entre l’ouverture et la fermeture de la balise ‘textarea’. En effet le contenu ne sera plus considéré comme vide.
Les éléments à cocher

Lorsque vous soumettez un formulaire, les valeurs des champs de type radio ou checkbox ne sont pas directement récupérables dans le tableau $_POST[]. En effet tant qu’un de ses éléments n’est pas coché, PHP ne retourne rien, donc $_POST[‘–‘] pour cet élément n’est pas déclarer.

Code HTML

    <label>Sexe : </label> <input type="radio" name="sexe"> H <input type="radio" name="sexe"> F
    <label>J'ai lu les conditions d'utilisation : </label> <input type="checkbox" name="cgu">

Récupération en php.

    $recupSexe = $_POST['sexe']; // génère une erreur
    $recupCgu = $_POST['cgu']; // génère une erreur

Vous devez faire un test avant la récupération via $_POST[].

    if(isset($_POST['sexe'])){
     $recupSexe = $_POST['sexe'];
    }
    if(isset($_POST['cgu'])){
     $recupCgu = $_POST['cgu'];
    }

Liste d’options

Lorsque vous soumettez un formulaire, le valeur d’une liste (select) d’options (option) est directement récupérable dans le tableau $_POST[]. Si l’internaute ne sélectionne rien, c’est la valeur de la première option qui sera récupérée.

Code HTML

    <label>Ville : </label>
    <select name="ville">
     <option value="v1"> Lyon </option>
     <option value="v2"> Marseille </option>
     <option value="v3"> Paris </option>
    </select>

Récupération en php

    $recupVille = $_POST['ville']; // génère une erreur

 En HTML, vous pouvez définir la valeur par défaut sur une autre option que la première avec l’attribut selected.
Protection pour HTML

Certains caractères sont réservés en html, il est nécessaire pour votre sécurité de les encoder. En effet si un internaute saisit par exemple le contenu « <hr>« , et si la chaîne récupérée par $_POST[] n’est pas protégée, à l’affichage de ce contenu, une barre horizontal va apparaître.

Les caractères réservés les plus courants en HTML sont :

    les signes < (supérieur) et > (inférieur)
    L’esperluette & utilisé pour les entités HTML
    Les guillemets simples ‘ ‘ et les guillemets doubles  » «

 La fonction htmlentities() permet de convertir tous les caractères éligibles en entités HTML.

    $contenu = "Mot en <strong>gras</strong>";
    echo htmlentities($contenu);

Affichage

Mot en &lt;strong&gt;gras&lt;/strong&gt;

Vous remarquez la protection des signes < et >

 Il existe aussi la fonction htmlspecialchars() qui est similaire à htmlentities() mais ne protège que les caractères réservés cités plus haut : <, >, &, ‘ ‘,  » « .

La fonction htmlentities() protège, par contre, tous les caractères ci-dessous :

" & < >   ¡ ¢ £ ¤ ¥ ¦ § ¨ © ª « ¬ ­ ® ¯ ° ± ² ³ ´ µ ¶ · ¸ ¹ º » ¼ ½ ¾ ¿ À Á Â Ã Ä Å Æ Ç È É Ê Ë Ì Í Î Ï Ð Ñ Ò Ó Ô Õ Ö × Ø Ù Ú Û Ü Ý Þ ß à á â ã ä å æ ç è é ê ë ì í î ï ð ñ ò ó ô õ ö ÷ ø ù ú û ü ý þ ÿ Œ œ Š š Ÿ ƒ ˆ ˜ Α Β Γ Δ Ε Ζ Η Θ Ι Κ Λ Μ Ν Ξ Ο Π Ρ Σ Τ Υ Φ Χ Ψ Ω α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ ς σ τ υ φ χ ψ ω ϑ ϒ ϖ       ‌ ‍ ‎ ‏ – — ‘ ’ ‚ “ ” „ † ‡ • … ‰ ′ ″ ‹ › ‾ ⁄ € ℑ ℘ ℜ ™ ℵ ← ↑ → ↓ ↔ ↵ ⇐ ⇑ ⇒ ⇓ ⇔ ∀ ∂ ∃ ∅ ∇ ∈ ∉ ∋ ∏ ∑ − ∗ √ ∝ ∞ ∠ ∧ ∨ ∩ ∪ ∫ ∴ ∼ ≅ ≈ ≠ ≡ ≤ ≥ ⊂ ⊃ ⊄ ⊆ ⊇ ⊕ ⊗ ⊥ ⋅ ⌈ ⌉ ⌊ ⌋ ⟨ ⟩ ◊ ♠ ♣ ♥ ♦
Nettoyage des espaces

La fonction trim() permet de supprimer les espaces inutiles (ou autres caractères) en début et fin de chaîne.

Exemple

    $chaine = "    dany     ";
    echo trim($chaine);

Affichage

dany

Autre exemple

    $chaine = "-----dany-----";
    echo trim($chaine,"-");

Affichage

dany

Dans ce cas le caractère à nettoyer est fourni en second paramètre de la fonction.
Suppression des balises HTML

La fonction strip_tags() supprime toutes les balises HTML du champ de saisie.

Exemple

    $chaine = "Je suis <strong>Dany</strong>";
    echo strip_tags($chaine);

Affichage

Je suis Dany

 Les commentaires HTML sont aussi supprimés. En outre si la balise est rompue, cela peut conduire à la suppression de plus de textes/données que désiré.
Les expressions régulières

C’est un outil très puissant qui vous permet de vérifier la validité des chaines de caractères plus complexes (email, numéro de téléphone…).

Il vous faut utiliser la fonction preg_match() en PHP.
Contrôle d’un email

    $email = "dany@gmail.com";
    if ( preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $email ) )
    {
    echo "L'adresse eMail est valide";
    }

Dans ce cas précis l’email doit commencer (/^) puis contenir n’importe quel caractère ( .+) avant et après @ suivi d’un point (\.) et d’une extension comprenant au moins 2 caractères( {2,}) et se terminer ($/).
Contrôle d’un numéro de téléphone

Le contrôle accepte tous les types de format de téléphone :
0477558899, 04-77-55-88-99, 04 77 55 88 99 ou 04/77/55/88/99

    $tel = "04-77-55-88-99";
    if ( preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $tel ) ){
        echo "Le téléphone est valide";
    }

Dans ce cas précis le point d’interrogation (?) signifie ou, donc les caractères autorisés ([-/ ]) qui séparent les nombres ne sont pas obligatoires.
