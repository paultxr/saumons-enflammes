<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../src/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body class="pageContact">
<?php include('header.php')?>
    <section class="contactForm">
        <div class="parallaxContact">
            <div class="contactTitle"><h1>Contactez nous </h1></div>
        </div>
        <form action="" method="post">
                <div>
                    <label for="firstName">Prénom </label> <br/>
                    <input type="text" id="firstName" name="userFirstName">
                </div>
                <div>
                    <label for="lastName">Nom </label><br/>
                    <input type="text" id="lastName" name="userLastName">
                </div>
                <div>
                    <label for="lastName">Email </label><br/>
                    <input type="email" id="Mail" name="userMail">
                </div>
                <div>
                    <label for="msg"> Message</label><br/>
                    <textarea id="msg" name="userMessage" rows="5" cols="33"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
    </section>
    <?php include('footer.php')?>
    <script src="../src/script.js"></script>
</body>
</html>