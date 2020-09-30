<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les Saumons Enflammés en live :</h1>


    <div>
    <p>Retrouvez nos lives Twitch et toutes les vidéos de nos performances sur cette page. Laissez-nous vos commentaires.</p>
    <p>Carpe Diem</p>

    </div>
    <!-- Add a placeholder for the Twitch embed -->
    <div id="twitch-embed"></div>

    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

     <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: 480,
        channel: "bigmagumba",
        // only needed if your site is also embedded on embed.example.com and othersite.example.com 
        //parent: ["embed.example.com", "othersite.example.com"]
        theme: "dark",          //chat theme : "dark" or "light"
      });
    </script>
    
    <!-- Embed parameters : https://dev.twitch.tv/docs/embed/everything -->

</body>
</html>
