<?php
$session = session();
$user = $session->get('user');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  appel du header-->
  <?php include('pages/header.php'); ?>
  <link rel="stylesheet" href="<?=CSS.'filmFocused.css'?>">
  <title>filmFocused</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>



<body>

  <div class="contentDiv">
    <div class="background"></div>

    <div class="focusedDiv">
        <?php if (!$filmOwned): ?>
            <iframe class="videoFocused" src="https://www.youtube.com/embed/<?=$film['lien_trailer']?>" title="Bande annonce film" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <?php else: ?>
            <video class="videoFocused" controls>
                <source src="https://kdrive.infomaniak.com/2/app/826520/share/60a4a545-1a68-4dd1-8f1d-15c421834d1c/files/7/download" type="video/mp4">
            </video>
        <?php endif; ?>
      <div class="focusedDivDescription">
        <p class="nunito categoryTitle"><?= $film['titre']?></p>
        <p class="nunito descriptionText"><?=$film['synopsis']?></p>

        <div class="interactionBar">
        <?= $buttonDisplayStrategy->displayButton($film, $user) ?>

            <!-- une fonction qui se charge de rajouter le film aux films likés -->
          <!-- système qui affiche une icon rouge si on a deja liké ou que l'on vient de liker le film -->
        <a href="<?= base_url('liker?id_film=' . $film['id_film']) ?>">
            <?php
            $isUserLoggedIn = $user !== null;

            if ($isUserLoggedIn) {
                $likeModel = new \App\Models\LikesModel();
                $id_user = $user['id_user'];
                $film_id = $film['id_film'];

                $isLiked = $likeModel->where(['id_film' => $film_id, 'id_user' => $id_user])->countAllResults() > 0;
            }
            ?>

            <svg class="loveIcon" width="37" height="34" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                <?php if ($isUserLoggedIn): ?>
                    <?php if ($isLiked): ?>
                        <!-- Cœur plein si déjà liké -->
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.5C17.5 4.2 11.5 3.5 7 7C2.5 10.5 2 17 4.5 21.5C7 26 16 34 20 36C20.3 36.2 20.7 36.2 21 36C21.3 35.8 21.7 35.8 22 36C22.3 36.2 22.7 36.2 23 36C23.3 35.8 23.7 35.8 24 36C26.5 34 34.5 26 37 21.5C39.5 17 38 11.5 33.5 7C29 2.5 24 4 20 7.5Z" fill="#FF0000"/>
                    <?php else: ?>
                        <!-- Cœur creux si non liké -->
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9885 8.55969C16.6563 4.664 11.0995 3.61607 6.92441 7.18336C2.74933 10.7506 2.16153 16.715 5.44025 20.934C8.16628 24.4419 16.4162 31.8402 19.1201 34.2347C19.4226 34.5026 19.5738 34.6366 19.7503 34.6892C19.9043 34.7351 20.0728 34.7351 20.2267 34.6892C20.4032 34.6366 20.5544 34.5026 20.8569 34.2347C23.5608 31.8402 31.8107 24.4419 34.5368 20.934C37.8155 16.715 37.2994 10.7131 33.0526 7.18336C28.8057 3.6536 23.3208 4.664 19.9885 8.55969Z" fill="#222"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6553 5.55969C15.323 1.664 9.76624 0.616071 5.59116 4.18336C1.41607 7.75064 0.82828 13.715 4.107 17.934C6.83303 21.4418 15.083 28.8402 17.7868 31.2347C18.0893 31.5026 18.2406 31.6366 18.417 31.6892C18.571 31.7351 18.7395 31.7351 18.8935 31.6892C19.0699 31.6366 19.2212 31.5026 19.5237 31.2347C22.2276 28.8402 30.4775 21.4418 33.2035 17.934C36.4822 13.715 35.9662 7.71312 31.7193 4.18336C27.4725 0.653595 21.9875 1.664 18.6553 5.55969Z" stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                    <?php endif; ?>
                <?php else: ?>
                    <!-- Cœur creux non cliquable si l'utilisateur n'est pas connecté -->
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9885 8.55969C16.6563 4.664 11.0995 3.61607 6.92441 7.18336C2.74933 10.7506 2.16153 16.715 5.44025 20.934C8.16628 24.4419 16.4162 31.8402 19.1201 34.2347C19.4226 34.5026 19.5738 34.6366 19.7503 34.6892C19.9043 34.7351 20.0728 34.7351 20.2267 34.6892C20.4032 34.6366 20.5544 34.5026 20.8569 34.2347C23.5608 31.8402 31.8107 24.4419 34.5368 20.934C37.8155 16.715 37.2994 10.7131 33.0526 7.18336C28.8057 3.6536 23.3208 4.664 19.9885 8.55969Z" fill="#222"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6553 5.55969C15.323 1.664 9.76624 0.616071 5.59116 4.18336C1.41607 7.75064 0.82828 13.715 4.107 17.934C6.83303 21.4418 15.083 28.8402 17.7868 31.2347C18.0893 31.5026 18.2406 31.6366 18.417 31.6892C18.571 31.7351 18.7395 31.7351 18.8935 31.6892C19.0699 31.6366 19.2212 31.5026 19.5237 31.2347C22.2276 28.8402 30.4775 21.4418 33.2035 17.934C36.4822 13.715 35.9662 7.71312 31.7193 4.18336C27.4725 0.653595 21.9875 1.664 18.6553 5.55969Z" stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                <?php endif; ?>
            </svg>
        </a>


        </div>
      </div>
    </div>

    
  <div class="contentTable">
    
     <p class="categoryTitle">Du même genre</p>

    <div id="galerie1" class="galerie">
      <div class="galerieContent">
          <?php foreach ($filmGenre as $film): ?>
              <a href="<?=base_url('filmFocused/'.$film['id_film'])?>"><img class="thumbnailGalerie" src="<?=IMG.$film['image']?>" alt="<?=$film['titre']?>"></a>
          <?php endforeach; ?>
      </div>
    </div>
  </div>

  
  <script>
  let positions = {
    galerie1: 0,
    galerie2: 0,
    galerie3: 0,
    galerie4: 0,
  };

  const imageWidth = 360; // Largeur de l'image utilisée
  const timeoutDuration = 10000; // Durée d'attente en millisecondes (10 secondes) avant remise en position de départ
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

    

    
  </div>
</body>
</html>