<?php
$session = session();
$user = $session->get('user')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  appel du header-->
  <?php include('header.php'); ?>
  <link rel="stylesheet" href="<?=CSS.'yourMovies.css'?>">
  <title>vosFilms</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
  <script src="<?= JS."gallery.js"?>"></script>
</head>

<body>

  <div class="contentTable">


    <p class="categoryTitle">Vos films</p>
  
    <div id="galerie2" class="galerie">
        <?php if (!empty($films)): ?>
            <div class="galerieContent">
                <?php foreach ($films as $film): ?>
                    <a href="filmFocused/<?= $film['id_film'] ?>"><img class="thumbnailGalerie" src="<?= IMG . $film['image'] ?>" alt="<?= $film['titre'] ?>"></a>
                <?php endforeach; ?>
            </div>
            <img onclick="defiler('galerie2')" class="selectionArrow" src="<?= IMG . 'arrowRight.png' ?>" alt="Flèche de selection"></img>
        <?php else: ?>
            <div class="nofilmDiv">
                <p class="nofilmText">Vous n'avez pas encore acheté de film.</p>
            </div>
        <?php endif; ?>
    </div>

    <p class="categoryTitle">Vos séries</p>
  
    <div id="galerie3" class="galerie">
        <?php if (!empty($series)): ?>
            <div class="galerieContent">
              <?php foreach ($series as $serie): ?>
                    <a href="filmFocused/<?=$serie['id_film']?>"><img class="thumbnailGalerie" src="<?=IMG.$serie['image']?>" alt="<?=$serie['titre']?>"></a>
              <?php endforeach; ?>
            </div>
            <img onclick="defiler('galerie3')" class="selectionArrow" src="<?= IMG . 'arrowRight.png' ?>" alt="Flèche de selection"></img>
        <?php else: ?>
            <div class="nofilmDiv">
                <p class="nofilmText">Vous n'avez pas encore acheté de série.</p>
            </div>
        <?php endif; ?>
    </div>

  </body>
  </html>