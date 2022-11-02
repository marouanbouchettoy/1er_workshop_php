<?php
echo ('<link rel="stylesheet" href="layout/css/style.css" type="text/css">');
$title = "Affichage";
$image = "layout/image/php.png";
$np = $_POST['Nom_Prenom'];
$em = $_POST['Email'];
$te = $_POST['Telephone'];
$me = $_POST['Message'];
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
    <div class="affichage">
        <h5>Nom Et Prénom : <?= $np ?></h5>
        <h5>Email : <?= $em?></h5>
        <h5>Telephone : <?= $te?></h5>
        <h5>Message : <?= $me?></h5>
    </div>
</body>

</html>