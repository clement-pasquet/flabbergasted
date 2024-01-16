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
    <?php include('pages/header.php'); ?>
    <link rel="stylesheet" href="<?=CSS.'accueil.css'?>">
    <title>accueil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <script src="<?= JS."gallery.js"?>"></script>
</head>

<body>

  <div class="contentTable">
    
    <p class="categoryTitle">Série</p>

    <div id="galerie1" class="galerie">
      <div class="galerieContent">
          <?php foreach ($series as $serie): ?>
                <a href="filmFocused/<?=$serie['id_film']?>"><img class="thumbnailGalerie" src="<?=IMG.$serie['image']?>" alt="<?=$serie['titre']?>"></a>
          <?php endforeach; ?>
      </div>
    <img onclick="defiler('galerie1')" class="selectionArrow" src="<?=IMG.'arrowRight.png'?>" alt="Flèche de selection"></img>
    </div>

    <p class="categoryTitle">Films d'aventure</p>
  
    <div id="galerie2" class="galerie"> 
      <div class="galerieContent">
          <?php foreach ($filmsAventure as $film): ?>
              <a href="filmFocused/<?=$film['id_film']?>"><img class="thumbnailGalerie" src="<?=IMG.$film['image']?>" alt="<?=$film['titre']?>"></a>
          <?php endforeach; ?>
      </div>
    <img onclick="defiler('galerie2')" class="selectionArrow" src="<?=IMG.'arrowRight.png'?>" alt="Flèche de selection"></img>
    </div>

    <p class="categoryTitle">Science-Fiction</p>

    <div id="galerie3" class="galerie">
      <div class="galerieContent">
          <?php foreach ($filmsScienceFiction as $film): ?>
              <a href="filmFocused/<?=$film['id_film']?>"><img class="thumbnailGalerie" src="<?=IMG.$film['image']?>" alt="<?=$film['titre']?>"></a>
          <?php endforeach; ?>
      </div>
    <img onclick="defiler('galerie3')" class="selectionArrow" src="<?=IMG.'arrowRight.png'?>" alt="Flèche de selection"></img>
    </div>
  </div>

</body>
</html>