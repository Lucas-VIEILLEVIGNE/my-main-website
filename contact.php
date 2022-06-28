<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>


<link rel="stylesheet" href="main-style.css">   
<!-- <link rel="stylesheet" href="contact-style.css"> -->

<body class="dark-mode" data-barba="wrapper">

<div class="wipe-transition"></div>  

<main data-barba="container" data-barba-namespace="page-contact">
    <div class="box">
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
</main>

<script src="app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<!-- unpkg -->
<script src="https://unpkg.com/@barba/core"></script>

<script src="nav-bar.js"></script>

</body>