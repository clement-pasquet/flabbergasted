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
      <video controls class="videoFocused">
        <source src="images/LE%20CHÊNE%20-%20Bande-annonce.mp4" type="video/mp4">
        Votre navigateur ne prend pas en charge la lecture de vidéos.
      </video>
      
      <div class="focusedDivDescription">
        <p class="nunito categoryTitle">Titre du film</p>
        <p class="descriptionText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="interactionBar">
          <button type="submit" class="updateButton">
            <p class="nunito updateButtonText">Acheter</p>
          </button>

          <!-- Plus tard pour le php il faudra appeler une fonction qui se chargera de rajouter le film aux films likés -->
          <!-- Plus un système qui affichera une icon rouge si on a deja liké ou que l'on vient de liker le film -->
          <a href="#"> 
            <svg class="loveIcon" width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9885 8.55969C16.6563 4.664 11.0995 3.61607 6.92441 7.18336C2.74933 10.7506 2.16153 16.715 5.44025 20.934C8.16628 24.4419 16.4162 31.8402 19.1201 34.2347C19.4226 34.5026 19.5738 34.6366 19.7503 34.6892C19.9043 34.7351 20.0728 34.7351 20.2267 34.6892C20.4032 34.6366 20.5544 34.5026 20.8569 34.2347C23.5608 31.8402 31.8107 24.4419 34.5368 20.934C37.8155 16.715 37.2994 10.7131 33.0526 7.18336C28.8057 3.6536 23.3208 4.664 19.9885 8.55969Z" fill="#222"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6553 5.55969C15.323 1.664 9.76624 0.616071 5.59116 4.18336C1.41607 7.75064 0.82828 13.715 4.107 17.934C6.83303 21.4418 15.083 28.8402 17.7868 31.2347C18.0893 31.5026 18.2406 31.6366 18.417 31.6892C18.571 31.7351 18.7395 31.7351 18.8935 31.6892C19.0699 31.6366 19.2212 31.5026 19.5237 31.2347C22.2276 28.8402 30.4775 21.4418 33.2035 17.934C36.4822 13.715 35.9662 7.71312 31.7193 4.18336C27.4725 0.653595 21.9875 1.664 18.6553 5.55969Z" stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>

          
          <div class="loveDiv">
            <svg class="icon" width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.2633 18.75C11.972 18.5803 13.6124 17.9613 15.0334 16.95C18.0193 14.0207 20.5824 10.6492 22.6416 6.942C22.9003 6.43049 23.2866 6.0027 23.7592 5.70459C24.2318 5.40648 24.7727 5.24933 25.3239 5.25C25.756 5.24977 26.1833 5.3462 26.5772 5.53288C26.9712 5.71957 27.3228 5.99223 27.6087 6.33275C27.8947 6.67327 28.1084 7.07385 28.2357 7.50787C28.363 7.94188 28.4009 8.3994 28.3469 8.85L25.6784 16.95M10.2633 18.75L5.125 18.75V34.95C5.125 35.4274 5.30545 35.8852 5.62666 36.2228C5.94787 36.5604 6.38352 36.75 6.83778 36.75H8.55057C9.00482 36.75 9.44048 36.5604 9.76169 36.2228C10.0829 35.8852 10.2633 35.4274 10.2633 34.95V18.75ZM23.9656 16.95H32.4507C33.0012 16.9502 33.5434 17.0898 34.0316 17.357C34.5198 17.6242 34.9396 18.0111 35.2553 18.4849C35.5711 18.9587 35.7735 19.5055 35.8455 20.079C35.9176 20.6524 35.857 21.2357 35.6691 21.7794L31.6372 34.3794C31.1439 35.8032 30.8167 36.75 28.4188 36.75C23.993 36.75 19.2109 34.8942 15.5987 33.8466" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <svg class="icon" width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M30.7366 22.6984C29.028 22.8641 27.3876 23.4684 25.9665 24.4558C22.9805 27.3167 20.4174 30.6095 18.3584 34.2301C18.0988 34.7282 17.7121 35.1444 17.2396 35.4342C16.7671 35.7239 16.2266 35.8763 15.6761 35.875C15.244 35.8752 14.8167 35.7811 14.4228 35.5988C14.0288 35.4166 13.6772 35.1504 13.3912 34.8179C13.1053 34.4855 12.8916 34.0944 12.7643 33.6706C12.637 33.2469 12.5991 32.8002 12.6531 32.3603L15.3216 24.4558M30.7366 22.6984H35.875V6.88234C35.875 6.41627 35.6945 5.96928 35.3733 5.63971C35.0521 5.31015 34.6165 5.125 34.1622 5.125H32.4494C31.9952 5.125 31.5595 5.31015 31.2383 5.63971C30.9171 5.96928 30.7367 6.41627 30.7367 6.88234L30.7366 22.6984ZM17.0344 24.4558H8.54926C7.99883 24.4556 7.45656 24.3193 6.96837 24.0584C6.48017 23.7976 6.06043 23.4199 5.74468 22.9573C5.42893 22.4947 5.22647 21.9609 5.15445 21.401C5.08243 20.8411 5.14297 20.2716 5.33094 19.7408L9.36283 7.43942C9.85611 6.04936 10.1833 5.125 12.5812 5.125C17.007 5.125 21.7891 6.93682 25.4013 7.95959" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          <a href="#"><p class="descriptionText interactionText">Regarder hors connexion</p></a>

          </div>
        </div>
      </div>
    </div>

    
  <div class="contentTable">
    
    <p class="categoryTitle">Documentaire</p>

    <div id="galerie1" class="galerie">
      <div class="galerieContent">
        <img class="thumbnailGalerie" src="images/rectangle_17.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_18.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_19.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_20.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_17.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_18.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_19.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_20.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_17.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_18.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_19.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_20.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_17.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_18.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_19.png"></img>
        <img class="thumbnailGalerie" src="images/rectangle_20.png"></img>
      </div>
    <img onclick="defiler('galerie1')" class="selectionArrow" src="images/arrowRight.png" alt="Flèche de selection"></img> 
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