<?php
$session = session();
$user = $session->get('user');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS.'accountName.css'?>">
  <title>accountName</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>




<body>
  <div class="accountNameMainDiv">
    <p class="accountNameTitle">Nom</p>
    <p class="accountNameSubtitle">Le nom que vous indiquez ici sera associé à votre profil.<br>Choisissez un nom qui vous plaît et qui représente votre identité sur notre plateforme.</p>

    <form action="<?php echo base_url('changerNomEtPrenom'); ?>" method="post">
      <p class="accountNameTitle">Prénom</p>
      <input name="prenom" id="ChamptexteName" type="text" value="<?= $user['prenom']; ?>">
      
      <p class="accountNameTitle">Nom de famille</p>
      <input name="nom" id="ChamptexteName" type="text" value="<?= $user['nom']; ?>">


      <div class="buttonDiv">
        <button type="submit" class="updateButton">
          <p class="nunito updateButtonText">Mettre à jour</p>
        </button>
      </div>
    </form>

  </div>
  
</body>
</html>