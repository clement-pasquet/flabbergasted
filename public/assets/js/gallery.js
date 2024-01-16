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
