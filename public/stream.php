<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/style.css">
    <title>Document</title>
</head>
<body>
<?php include('header.php')?>
    <section id="banner-stream">
        <div id="banner">
            <h1 class="banner-title">Les Saumons Enflammés : </br> le live</h1>
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
    <?php include('footer.php')?>
</body>
</html>
