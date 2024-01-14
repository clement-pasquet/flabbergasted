<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  appel du header-->
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="<?=CSS.'searchStyle.css'?>">
    <title>Resultat de la recherche:</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>



<div class="contentDiv">
    <?php if (isset($films)): ?>
        <?php foreach ($films as $film): ?>
            <a href="../filmFocused/<?=$film['id_film']?>" class="link_style">
                <div class="cardDiv">
                    <img class="cardPic" src="<?=IMG.$film['image']?>" alt="<?=$film['titre']?>">
                    <div class="cardInfo">
                        <p class="titleFilm"><?= $film['titre']?></p>
                        <div class="cardInfoWithoutTitle">
                            <p>Genre : <?= $film['genre']?></p>
                            <p>Likes : <?= $film['likes']?></p>
                            <p>Réalisateur(s) : <?= $film['realisateur'] ?> </p>
                            <p>Date de sortie : <?= $film['date_release'] ?></p>
                            <p>Pays : <?= $film['pays'] ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>





</body>
</html>