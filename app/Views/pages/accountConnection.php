<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS.'accountConnection.css'?>"">
  <title>accountConnection</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>



<body>
  <div class="mainConnectionDiv">
    <a href="/">
      <img class="connectionLogo" src="<?= IMG.'logo1.png' ?>" alt="Logo Flabbergaster"></img>
    </a>
    <p class="nunito mainConnectionText">Connexion</p>

    <form class="mainConnectionDiv" action="#" method="post">

      <input class="mainConnectionChamptexte" type="text" placeholder="Pseudo ou adresse e-mail">

      <div class="mainConnectionPassword">
        <input class="mainConnectionChamptextePassword" type="password" placeholder="Mot de passe">
        <span class="password-toggle" onclick="togglePasswordVisibility()"><img src="<?= IMG.'eyeIcon.png' ?>" class="eyeIcon" alt="To Toggle Password Visibility" ></span>
      </div>



      <div class="checkboxPassword">
        <input class="checkboxPasswordInput" type="checkbox" id="passwordCheckbox1">
        <label class="mainConnectionText" for="passwordCheckbox1">Se souvenir de moi</label>
      </div>

      <button class="connectionButton">
        <p class="nunito connectionButtonText">Se connecter</p>
      </button>

    </form>


    <p class="nunito reinitText">Réinitialiser mot de passe ?</p>

    <a href="/accountCreate">
      <p class="nunito createaccountText">Créer compte</p>
    </a>

  </div>



  <div class="background"></div>

  <script>
  function togglePasswordVisibility() {
      var passwordField = document.querySelector('.mainConnectionChamptextePassword');
      var eyeIcon = document.querySelector('.password-toggle img');

      if (passwordField.type === 'password') {
          passwordField.type = 'text';
          eyeIcon.src = '<?= IMG.'eyeIcon.png' ?>'; // Remplacez 'eyeClosedIcon.png' par le nom de votre icône d'œil fermé
      } else {
          passwordField.type = 'password';
          eyeIcon.src = '<?= IMG.'eyeIcon.png' ?>'; // Remplacez 'eyeIcon.png' par le nom de votre icône d'œil ouvert
      }
  }
 </script>

</body>
</html>