<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>


<link rel="stylesheet" href="main-style.css">
<link rel="stylesheet" href="contact-style.css">


<div class="container">
    <div class="left">
        <div class="h1-left">
            <h1>
                CONTACT ME
            </h1>
        </div>
        <div class="contact">
            <form action="submit-contact.php" method="POST">
                        <select name="sujet" id="#" name="subject" placeholder="Sujet" required="">
                            <option value="0">Projet Graphique</option>
                            <option value="1">Projet Dev</option>
                            <option value="2">Prise de contact</option>
                            <option value="3">Autres demandes</option>    
                        </select>     
                <div class="identite">
                    <div class="prenom"><input type="text" id="#" name="first-name" required=""/>
                        <label>Prénom</label>
                    </div>
                    <div class="nom"><input type="text" id="#" name="first-name" required=""/>
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