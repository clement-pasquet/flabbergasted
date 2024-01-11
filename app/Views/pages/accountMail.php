<?php
$session = session();
$user = $session->get('user');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS.'accountMail.css'?>">
  <title>accountMail</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>


<body>
  <div class="accountMainDiv">
    <p class="accountTitle">Mail</p>
    <p class="accountSubtitle">Le mail que vous indiquez ici sera associé à votre profil.<br>Ce numéro nous permettra de vérifier votre identité en cas de perte de mot de passe, et de vous envoyer des mails que nous considérons importants.</p>

    <form action="<?php echo base_url('changerMail'); ?>" method="post">
      <p class="accountTitle">Courriel</p>
      <input name="mail" id="ChamptexteMail" type="mail" value="<?= $user['mail']; ?>" placeholder="Entrez votre mail">
      

      <div class="buttonDiv">
        <button type="submit" class="updateButton">
          <p class="nunito updateButtonText">Mettre à jour</p>
        </button>
      </div>
    </form>


  </div>
  
</body>
</html>