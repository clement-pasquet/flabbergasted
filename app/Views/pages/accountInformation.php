<?php
$session = session();
$user = $session->get('user');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS.'accountInformation.css'?>">
  <title>accountInformation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>

<header>
    <?php include('header.php'); ?>
</header>

<body>

  <p class="accountInformationMainText">Informations sur le compte :</p>
  <div class="accountInformationMainDiv">
    <div class="accountIconDiv">
      <img class="accountIcon" src="<?= IMG.'accountIcon.png' ?>">
    </div>

    <div class="accountParameter">
      <div class="accountParameterBlock">
        <div>
          <p class="accountParameterBlockTitle">Nom et Prénom</p>
            <a href="/accountName">
                <p class="accountParameterBlockText"><?= $user['nom'].' '.$user['prenom']; ?></p>
            </a>
        </div>
        <a href="/accountName">
          <img class="arrowRight" src="<?= IMG.'arrowRight.png' ?>">
        </a>
      </div>
        <img class="BlockLine">


      <div class="accountParameterBlock">
        <div>
          <p class="accountParameterBlockTitle">Adresse e-mail</p>
            <a href="/accountMail">
                <p class="accountParameterBlockText"><?= $user['mail']; ?></p>
            </a>
        </div>
        <a href="/accountMail">
          <img class="arrowRight" src="<?= IMG.'arrowRight.png' ?>">
        </a>
      </div>
        <img class="BlockLine">


      <div class="accountParameterBlock">
        <div>
          <p class="accountParameterBlockTitle">Mot de passe</p>
            <a href="/accountResetPassword">
                <p class="accountParameterBlockText">Changer de mot de passe</p>
            </a>
        </div>
        <a href="/accountResetPassword">
          <img class="arrowRight" src="<?= IMG.'arrowRight.png' ?>">
        </a>
      </div>
      <img class="BlockLine">
    </div>

  </div>
  
</body>
</html>