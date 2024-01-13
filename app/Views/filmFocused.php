<?php
$session = session();
$user = $session->get('user');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=CSS.'filmFocused.css'?>">
  <title>filmFocused</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>

<header class="header1">
    <div class="headerLeft">
        <!-- Groupe à gauche avec logo/nom et Icon Fichier/Texte Vos Fichiers -->
        <a href="/">
            <img class="logo" src="<?=IMG.'logo1.png'?>" alt="Logo Flabbergaster">
        </a>

        <div class="iconAndText">
            <svg width="41" height="37" viewBox="0 0 41 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.35042 15.6131C8.51264  15.2564 8.77407 14.9539 9.10352 14.7418C9.43296 14.5296 9.81649 14.4168 10.2083 14.4167H36.75V12.375C36.75 11.292 36.3198 10.2534 35.554 9.48765C34.7882 8.72187 33.7496 8.29167 32.6667 8.29167H23.3628L18.4628 1.75833C18.0815 1.25225 17.5881 0.841404 17.0213 0.558019C16.4545 0.274634 15.8298 0.126419 15.1961 0.125H4.08333C3.00037 0.125 1.96175 0.555207 1.19598 1.32098C0.430207 2.08675 0 3.12537 0 4.20833V32.7917C0.00277212 33.1062 0.0425173 33.4194 0.118417 33.7247L8.35042 15.6131Z" fill="white"/>
                <path d="M12.3507 18.5L4.08333 36.777C4.36745 36.8407 4.65756 36.8736 4.94866 36.875H31.3879C31.7809 36.8751 32.1655 36.7605 32.495 36.5452C32.8246 36.33 33.0849 36.0233 33.2444 35.6623L40.8333 18.5H12.3507Z" fill="white"/>
            </svg>

            <a href="/yourMovies">
                <p class="nunito headerText">Vos Films</p>
            </a>
        </div>
    </div>

    <!-- Barre de recherche au milieu -->
    <input type="text" name="autocomplete" class="searchbar" placeholder="Rechercher un film ou une série">


    <div class="headerRight">
        <!-- Groupe à droite avec texte et image du compte/de la connexion au compte -->
        <a href="/accountConnection">
            <p class="nunito headerText">Connexion</p>
        </a>
        <a href="/accountInformation">
            <svg class="logo" width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.5 58C45.6878 58 58 45.6878 58 30.5C58 15.3122 45.6878 3 30.5 3C15.3122 3 3 15.3122 3 30.5C3 45.6878 15.3122 58 30.5 58ZM30.5 58C35.8802 58.0059 41.1426 56.4243 45.6281 53.4533C45.2736 50.4988 43.85 47.7763 41.6259 45.7994C39.4019 43.8225 36.5312 42.7279 33.5556 42.7222H27.4444C24.4688 42.7279 21.5981 43.8225 19.3741 45.7994C17.15 47.7763 15.7265 50.4988 15.3719 53.4533C19.8574 56.4243 25.1198 58.0059 30.5 58ZM39.6667 24.3889C39.6667 29.4515 35.5626 33.5555 30.5 33.5555C25.4374 33.5555 21.3333 29.4515 21.3333 24.3889C21.3333 19.3263 25.4374 15.2222 30.5 15.2222C35.5626 15.2222 39.6667 19.3263 39.6667 24.3889Z" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</header>

<body>

  <div class="contentDiv">
    <div class="background"></div>

    <div class="focusedDiv">
        <iframe class="videoFocused" src="https://www.youtube.com/embed/<?=$film['lien_trailer']?>" title="Bande annonce film" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
      <div class="focusedDivDescription">
        <p class="nunito categoryTitle"><?= $film['titre']?></p>
        <p class="nunito descriptionText"><?=$film['synopsis']?></p>

        <div class="interactionBar">
<!--        Sert à rediriger vers la page de paiement avec les bonnes informations-->
        <form action="<?= base_url('payement') ?>" method="post">
            <!-- Ajoutez un champ caché pour chaque information du film -->
            <input type="hidden" name="id_film" value="<?= $film['id_film'] ?>">
            <input type="hidden" name="titre" value="<?= $film['titre'] ?>">
            <input type="hidden" name="date_release" value="<?= $film['date_release'] ?>">
            <input type="hidden" name="image" value="<?= $film['image'] ?>">
            <input type="hidden" name="prix" value="<?= $film['prix'] ?>">
            <input type="hidden" name="genre" value="<?= $film['genre'] ?>">
            <input type="hidden" name="realisateur" value="<?= $film['realisateur'] ?>">
            <input type="hidden" name="synopsis" value="<?= $film['synopsis'] ?>">
            <input type="hidden" name="duree" value="<?= $film['duree'] ?>">
            <input type="hidden" name="pays" value="<?= $film['pays'] ?>">
            <input type="hidden" name="est_serie" value="<?= $film['est_serie'] ?>">
            <input type="hidden" name="lien_trailer" value="<?= $film['lien_trailer'] ?>">
            <input type="hidden" name="likes" value="<?= $film['likes'] ?>">

            <!-- Bouton d'achat -->

            <button type="submit" class="updateButton" <?= isset($user) ? '' : 'disabled' ?>>
                <p class="nunito updateButtonText">Acheter</p>
            </button>

        </form>



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