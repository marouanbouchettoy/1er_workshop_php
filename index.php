<?php
echo ('<link rel="stylesheet" href="layout/css/style.css" type="text/css">');
$title = "PHP";
$image = "layout/image/php.png"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $image ?>" type="image/x-icon">
    <title><?= $title ?></title>
</head>

<body>
    <h1> PHP? </h1>
    <p>PHP est un langage de script côté serveur conçu pour le développement Web.
        C'est l'un des premiers langages à être utilisé pour les pages Web dynamiques.
        Le code PHP peut être intégré dans du code HTML, ou il peut être utilisé
        conjointement avec divers systèmes de modèles Web, systèmes de gestion
        de contenu Web et frameworks Web.
    </p>
    <?php include "temp/formulaire.php"; ?>
</body>

</html>