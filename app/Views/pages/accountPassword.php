<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS.'accountPassword.css'?>">
  <title>accountPassword</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>




<body>
  <div class="accountMainDiv">
    <p class="accountTitle">Mot de passe</p>
    <p class="accountSubtitle">Le mot de passe que vous indiquez ici sera associé à votre profil.<br>Mettez un mot de passe solide mais facilement mémorisable.</p>

    <form action="#" method="post">
      <p class="accountTitle">Modifier mot de passe</p>
      <input id="ChamptextePassword" type="password" placeholder="Entrez votre nouveau mot de passe">
      <br>
      <input id="ChamptextePassword" type="password" placeholder="Confirmez votre nouveau mot de passe">


      <div class="buttonDiv">
        <button type="submit" class="updateButton">
          <p class="nunito updateButtonText">Mettre à jour</p>
        </button>
      </div>
    </form>


  </div>
  
</body>
</html>