<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS.'accountCreate.css' ?>">
  <title>accountCreate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>




<body>

  <div class="mainConnectionDiv">
    <a href="/">
      <img class="connectionLogo" src="<?= IMG.'logo1.png' ?>" alt="Logo Flabbergaster"></img>
    </a>

    <p class="nunito mainConnectionText">Créer compte</p>

      <form class="mainConnectionDiv" action="<?php echo base_url('inscription'); ?>" method="post">


          <input name="pseudo" class="mainConnectionChamptexte mainConnectionwritingText" type="text" placeholder="Pseudo" required></input>

          <input name="email" class="mainConnectionChamptexte mainConnectionwritingText" type="mail" placeholder="Adresse e-mail" required>

          <div class="mainConnectionPassword">
            <input name="password" class="mainConnectionChamptextePassword mainConnectionwritingText" type="password" placeholder="Mot de passe">
            <span class="password-toggle" onclick="togglePasswordVisibility(1)"><img src="<?= IMG.'eyeIcon.png' ?>" class="eyeIcon" alt="To Toggle Password Visibility" ></span>
          </div>

          <div class="mainConnectionPassword">
            <input name="passwordConfirmation" class="mainConnectionChamptextePassword mainConnectionwritingText" type="password" placeholder="Confirmation du MDP">
            <span class="password-toggle" onclick="togglePasswordVisibility(2)"><img src="<?= IMG.'eyeIcon.png' ?>" class="eyeIcon" alt="To Toggle Password Visibility" ></span>
          </div>

          <div class="checkboxPassword">
            <input name="checkbox" class="checkboxPasswordInput" type="checkbox" id="passwordCheckbox1">
            <label class="mainConnectionText" for="passwordCheckbox1">Se souvenir de moi</label>
          </div>

          <button type="submit" class="connectionButton">
            <p class="nunito connectionButtonText">S'inscrire</p>
          </button>

        </form>




    <a href="/accountConnection">
      <p class="nunito createaccountText">Connexion</p>
    </a>

  </div>
 
  

  <div class="background"></div>

        
  <script>
  function togglePasswordVisibility(fieldNumber) {
      var passwordField = document.querySelectorAll('.mainConnectionChamptextePassword')[fieldNumber - 1];
      var eyeIcon = document.querySelectorAll('.mainConnectionPassword .password-toggle img')[fieldNumber - 1];

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