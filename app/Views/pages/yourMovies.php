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


  
  <script>
  let positions = {
    galerie1: 0,
    galerie2: 0,
    galerie3: 0,
    galerie4: 0,
  };

  const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
  const imageWidth = (7.9 * viewportWidth) / 100; // Largeur de l'image utilisée
  const timeoutDuration = 5000; // Durée d'attente en millisecondes (10 secondes) avant remise en position de départ
  const scrollSpeed = 3; // Vitesse du défilement lorsqu'on appuie (3 fois plus rapide)
  let timeoutIDs = {};

  function defiler(galerieID) {
    const galerieContent = document.getElementById(galerieID);
    const nombreImages = galerieContent.querySelector('.galerieContent').childElementCount;
    const position = positions[galerieID];

    // Vérifie s'il reste plus d'une image à afficher pour autoriser le défilement
    if (nombreImages > 1 && position > -imageWidth * (nombreImages - 1)) {
      positions[galerieID] -= imageWidth * scrollSpeed; // Déplace la galerie d'une largeur d'image avec une vitesse plus rapide
      galerieContent.querySelector('.galerieContent').style.transform = `translateX(${positions[galerieID]}px)`;

      // Réinitialisation du défilement après un certain délai
      clearTimeout(timeoutIDs[galerieID]); // Réinitialisation du délai à chaque clic
      timeoutIDs[galerieID] = setTimeout(() => {
        positions[galerieID] = 0;
        galerieContent.querySelector('.galerieContent').style.transform = `translateX(${positions[galerieID]}px)`;
      }, timeoutDuration);
    }
  }

  </script>
  
  
    
  
  </body>
  </html>