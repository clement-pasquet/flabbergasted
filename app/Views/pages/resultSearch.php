<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS.'searchStyle.css'?>">
    <title>Resultat de la recherche:</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>
<div class="cardsFlex">
<?php if (isset($films)): ?>
<?php foreach ($films as $film): ?>

    <a href="../filmFocused/<?=$film['id_film']?>" class="link_style"><p class="titleFilm"><?= $film['titre']?></p>
        <div class="cardFlex">
        <img class="cardPic" src="<?=IMG.$film['image']?>" alt="<?=$film['titre']?>">
        <p>Genre : <?= $film['genre']?></p>
        <p>NB likes : <?= $film['likes']?></p>
        <p>Réalisateur : <?= $film['realisateur'] ?> </p>
        </div>
    </a>

<?php endforeach; ?>
<?php endif; ?>
</div>
</body>
</html>