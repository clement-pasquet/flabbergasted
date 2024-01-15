<?php
$session = session();
$user = $session->get('user');
?>

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
    <?php
    // Affichage du message d'erreur s'il existe
    $session = session();
    $error = $session->getFlashdata('error');
    if ($error !== null) {
        echo '<div class="errorText">' . $error . '</div>';
    }
    ?>
    <form action="<?php echo base_url('changerPassword'); ?>" method="post">
        <p class="accountTitle">Modifier mot de passe</p>


        <div class="mainConnectionPassword">
            <input name="password" id="ChamptextePassword" class="mainConnectionChamptextePassword mainConnectionwritingText" type="password" placeholder="Mot de passe">
            <span class="password-toggle" onclick="togglePasswordVisibility(1)"><img src="<?= IMG.'eyeIcon.png' ?>" class="eyeIcon" alt="To Toggle Password Visibility" ></span>
        </div>
        <br>
        <div class="mainConnectionPassword">
            <input name="passwordConfirmation" id="ChamptextePassword" class="mainConnectionChamptextePassword mainConnectionwritingText" type="password" placeholder="Confirmation du MDP">
            <span class="password-toggle" onclick="togglePasswordVisibility(2)"><img src="<?= IMG.'eyeIcon.png' ?>" class="eyeIcon" alt="To Toggle Password Visibility" ></span>
        </div>


        <?php
        // Affichage du message d'erreur s'il existe
        $session = session();
        $error = $session->getFlashdata('error');
        if ($error !== null) {
            echo '<div class="errorText">' . $error . '</div>';
        }
        ?>

        <div class="buttonDiv">
            <button type="submit" class="updateButton">
                <p class="nunito updateButtonText">Mettre à jour</p>
            </button>
        </div>
    </form>

</div>
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