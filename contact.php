<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>


<link rel="stylesheet" href="main-style.css">   
<link rel="stylesheet" href="contact-style.css">


<div class="container">
    <div class="left">
        <div class="h1-left">
            <h1>
                CONTACTEZ MOI !
            </h1>
        </div>
        <div class="contact">
            <form action="submit-contact.php" method="POST">
                <div class="select">
                    <span class="focus"></span>
                    <select id="standard-select" placeholder="Sujet" name="sujet">
                        <option value="1">Projet Design</option>
                        <option value="2">Projet Dev-web</option>
                        <option value="3">Prise de contact</option>
                        <option value="4">Autre demandes</option>
                    </select>
                </div>    
                <div class="identite">
                    <div class="prenom"><input type="text" id="#" name="first-name" required=""/>
                        <label>Prénom</label>
                    </div>
                    <div class="nom"><input type="text" id="#" name="last-name" required=""/>
                        <label>Nom</label>
                    </div>
                </div>
                <div class="email"><input type="email" id="#" name="email" required=""/>
                    <label>Email</label>
                </div>
                <div class="phone"><input type="tel" id="#"name="phone" placeholder="Téléphone (optionnel)" /></div>
                <div class="message"><textarea name="message" placeholder="Votre message..." required="" rows="12" cols="70"></textarea></div>
                <div class="btn-contact">
                <input type="submit" id="#" name="button" value="Envoyer" /></div>
            </form>
        </div>
    </div>
    
    <div class="right"></div>

</div>


<script src="nav-bar.js"></script>


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