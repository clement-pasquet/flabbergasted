<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS.'accountPhone.css'?>">
  <title>accountPhone</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>




<body>
  <div class="accountMainDiv">
    <p class="accountPhoneTitle">Numéro</p>
    <p class="accountNameSubtitle">Le numéro que vous indiquez ici sera associé à votre profil.<br>Ce numéro nous permettra de vérifier votre identité en cas de perte de mot de passe.</p>

    <form action="#" method="post">
      <p class="accountPhoneTitle">Numéro de téléphone</p>
      <input id="ChamptexteName" type="tel" value="0123456789" placeholder="Entrez votre numéro de téléphone">
      

      <div class="buttonDiv">
        <button type="submit" class="updateButton">
          <p class="nunito updateButtonText">Mettre à jour</p>
        </button>
      </div>
    </form>


  </div>
  
</body>
</html>