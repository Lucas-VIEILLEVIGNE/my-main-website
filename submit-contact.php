<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>

<link rel="stylesheet" href="submit.css">

<body>
    
    <div class="container">

        <div class="left">
            <h1>Merci de votre message !</h1>
            <p>Votre message à bien été envoyé je vous recontacterai dans les plus brefs délais. Je vous invite à retourner vous balader en cliquant ici : </p>
            <a href="index.php">  
            <button class="back-menu" type="button">Retour</button>
            </a>
        </div>

        <?php
    if(isset($_POST["message"])) {
        $message = "Ce message vous à été envoyé via le formulaire de contact
        Nom : ". $_POST["last-name"] ."
        Prénom : ". $_POST["first-name"] ."
        Email : ". $_POST["email"] ."
        Tél : ". $_POST["phone"] ."
        Méssage : ". $_POST["message"];
        $retour = mail("contact.souleven@gmail.com",$message,"Form:contact.souleven@gmail.com" . "/r/n" . "Reply-to:" . $_POST["email"]);

    }
?>

        <div class="right"></div>

    </div>

    
</body>