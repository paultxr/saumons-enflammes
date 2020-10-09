<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/style.css">
    <title>En direct</title>
</head>
<body>
    <section id="nav-bar-top">
        <?php include('header.php')?>
    </section>

    <section id="banner-stream">
        <div id="banner">
            <h1 class="banner-title">EN DIRECT</h1>
        </div>
    </section>

    <div id="intro-stream">
        <h2>Ca va mordre !!</h2>
        <p>Retrouvez les lives Twitch de nos compétitions internationales sur cette page. Laissez-nous vos commentaires.</p>
        <p><img id="carp-icon" src="../src/img/carp-icon.png" alt="Carpe"> Diem</p>
    </div>
    
    <!-- Add a placeholder for the Twitch embed -->
    <div id="twitch-embed"></div>

    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

     <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "80%",
        height: 480,
        channel: "bigmagumba",
        // only needed if your site is also embedded on embed.example.com and othersite.example.com 
        //parent: ["embed.example.com", "othersite.example.com"]
        theme: "dark",          //chat theme : "dark" or "light"
      });
    </script>
    
    <!-- Embed parameters : https://dev.twitch.tv/docs/embed/everything -->
    
    <div class="join-us">
            <h2>Nous rejoindre</h2>
            <p>On recherche un quatrième joueur ou joueuse pour rejoindre l'équipe. <br> Mentalité compétitive et fortes connaissances en matière de pêche électronique sont requises !</p>
                            
                <form action="" method="get" class="form-example">
                    <div class="user-name">
                      <label for="name">Ton nom: </label><br>
                      <input type="text" name="name" id="name" required>
                    </div>
                    <div class="user-email">
                      <label for="email">Ton mail: </label><br>
                      <input type="email" name="email" id="email" required>
                    </div>
                      <input type="submit" value="Inscris-toi batard !" class="submit-button">
                    </div>
                  </form>

        </div>
    
    <?php include('footer.php')?>
    <script src="../src/script.js"></script>
</body>
</html>
