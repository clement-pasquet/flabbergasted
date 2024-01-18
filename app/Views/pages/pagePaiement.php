<?php
$session = session();
$user = $session->get('user')
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paiement page</title>

  <!-- Fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?=CSS.'pagePaiement.css'?>">
</head>

<body>
<header>
<a href="/">
    <img class="connectionLogo" src="<?=IMG.'logo1.png'?>" alt="Logo Flabbergaster">
</a>
</header>

<div class="Top-page">

  <!-- Left Part - Informations personnelles -->
  <div class="left-part">
        <div class="Info-personnelles">
          <p class="Titre1">Informations personnelles</p>
          <p class="Sous-titre1">Merci de remplir vos informations personnelles</p>
          <div class="input-pos">
            <!-- Input Fields for Personal Information -->
            <div>
              <label class="labelcolor" for="nom">Nom</label>
              <input name="nom" class="Entry" placeholder="<?= $user['nom']; ?>" required/>
            </div>
            <div>
              <label class="labelcolor" for="num">Numéro de téléphone</label>
              <input name="num" class="Entry" placeholder="0123456789" required/>
            </div>
            <div>
              <label class="labelcolor" for="adresse">Adresse</label>
              <input name="adresse" class="Entry" placeholder="2 rue de la poésie" />
            </div>
            <div>
              <label class="labelcolor" for="ville">Ville</label>
              <input name="ville" class="Entry" placeholder="Nantes" />
            </div>
          </div>
        </div>

        <!-- Paiement - Méthode de paiement -->
        <div class="Paiement">
          <p class="Titre1">Méthode de paiement</p>
          <p class="Sous-titre1">Merci de renseigner vos informations de paiement</p>

          <!-- Box 1 - Carte de crédit -->
          <div class="box1">
            <!-- Header for Carte de crédit -->
            <div class="header-paiement">
              <label for="Option1" class="optiondepaiement">Carte de crédit</label>
              <img src="<?=IMG.'Visa.svg'?>" alt="Visa-Icon" class="Visa-Icon">
            </div>
            <div class="input-pos3">
              <div>
                <label for="carte">Numéro de carte</label>
                <input name="carte" class="Entry2" type="number"  placeholder="1234 5678 1234 5678" maxlength="16" required />
              </div>
              <div>
                <label for="expiration">Date d’expiration</label>
                <input name="expiration" class="Entry2" type="date" placeholder="mm / aa" required />
              </div>
              <div>
                <label for="nomcarte">Nom sur la carte</label>
                <input name="nomcarte" class="Entry2" placeholder="Simon Strueux" required />
              </div>
              <div>
                <label for="cvc">CVC</label>
                <input name="cvc" class="Entry2" type="" placeholder="123" maxlength="3" required />
              </div>
            </div>
          </div>

        </div>

        <!-- Confirmation -->
        <div class="confirmation">
          <p class="Titre1">Confirmation</p>
          <p class="Sous-titre1">Nous arrivons vers la fin. Juste quelques clics et votre film est prêt !</p>


          <!-- Checkboxes for Confirmation -->
          <div class="choix1">
            <input name="Option1" type="checkbox" class="checkbox1"/>
            <label class="Option" for="Option1">J’accepte de recevoir des offres promotionnelles.</label>
          </div>
          <div class="choix2">
            <input name="Option2" type="checkbox" class="checkbox2" required />
            <label class="Option" for="Option2">J’accepte les conditions de vente et la politique privée du site.</label>
          </div>

            <form action="<?= base_url('achat') ?>" method="post">
            <!-- Appelle la route achat qui elle meme appelle la fonction setAchat du controleur Achat pour MAJ. La table achat -->
            <input type="hidden" name="id_film" value="<?= $film['id_film'] ?>">
            <input type="hidden" name="id_user" value="<?= $session->get('user')['id_user'] ?>">

            <!-- Bouton Acheter -->
            <button class="updateButton" type="submit">
                <p class="updateButtonText">Acheter</p>
            </button>
            </form>
        </div>

  </div>

  <!-- Right Part - Résumé de l'achat -->
  <div class="right-part">
    <div class="resume">
      <p class="Titre11">Résumé de l'achat</p>

      <!-- Partie 1 - Image and Name -->
      <div class="Partie1-end">
        <img src="<?= IMG . $film['image'] ?>" alt="TheMarvels" class="thumbnailGalerie">
        <p class="nom-film"><?= $film['titre'] ?></p>
      </div>


      <!-- Prix Total Section -->
      <hr class="seperateur">
      <div class="Prix">
        <div class="Titre">
          <p class="Titre11">Prix total</p>
          <p class="Sous-titre11">Prix total incluant les remises</p>
        </div>
        <p class="Final-prix"><?= $film['prix'] ?> €</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
