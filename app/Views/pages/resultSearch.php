<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="--><?php //= CSS.'accountCreate.css' ?><!--">-->
    <title>Resultat de la recherche:</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>

<?php
if (isset($films)) {
    foreach ($films as $film) {
        echo '<p>ID du film : ' . $film['id_film'] . '</p>';
        echo '<p>Titre : ' . $film['titre'] . '</p>';
        echo '<p>Genre : ' . $film['genre'] . '</p>';
        // Ajoutez d'autres détails du film selon votre structure de base de données
        echo '<hr>';
    }
} else {
    echo '<p>Pas trouvé</p>';
}
?>

</body>
</html>