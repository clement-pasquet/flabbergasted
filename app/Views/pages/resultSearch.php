<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS.'searchStyle.css'?>">
    <title>Resultat de la recherche:</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>
<?php if (isset($films)): ?>
<?php foreach ($films as $film): ?>
    <a href="../filmFocused/<?=$film['id_film']?>" class="link_style"><p>ID du film :<?= $film['titre']?></p><br>
                                    <p>Genre :<?= $film['genre']?></p><br>
        <p>ID du film :<?= $film['likes']?></p></a>
<?php endforeach; ?>
<?php endif; ?>
</body>
</html>