<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="../src/style.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<?php include('header.php')?>
    <div class="parallax">

        <div class=title-background><h1>L'équipe des saumons</h1></div>

    </div>

    <section class="team-players">

       
        <article class="box-michael">

            <h2>Michael</h2>
            <div class="quote"><p>"Forever young , profiter de la vie à fond et vivre de passions ! Croire en ses rêves ! Carpe Diem ! Ce qui ne me tue pas me rend plus fort #TeamKenzaFarah"</p></div>
            <img src="../src/img/michael-mobile.jpg" class="profile-image">
            <h3>Spécialités & Palmarès</h3>
            <p>Pêche à la carpe et au gros</p>
            <p>Disciplines.. .</p>
            

        </article>

        <div class="partition"></div>

        <article class ="box-therese">

            <h2>Thérèse</h2>
            <div class="quote"><p>"Depuis que j'ai découvert Fishing World Pro Tour, je peux passer une après midi entière à pêcher sans sentir le poisson et la vase. C'est mon mari qui est content !"</p></div>
            <img src="../src/img/therese-mobile.jpg" class="profile-image">
            <h3>Spécialités & Palmarès</h3>
            <p>Crapet et barbue de rivière de 15 kg</p>
            <p>Disciplines.. .</p>


        </article>  

        <div class="partition"></div>

        <article class="box-richard">

            <h2>Richard</h2>
            <div class="quote"><p>"À la base, j'étais sur EuroTruck mais j'avais personne avec qui jouer. Maintenant, j'attrape des poissons gros comme des camions mais je pollue moins. "</p></div>
            <img src="../src/img/richard-mobile.jpg" class="profile-image">
            <h3>Spécialités & Palmarès</h3>
            <p>Pêche à la carpe et au gros</p>
            <p>Vice-champion du lac Séminole</p>


        </section>

        <section class="mapping">

            <h2>Les coins de pêche que l'on préfère</h2>
            <p>Clique pour voir le détail des lacs ! Carpes, truites, brochets, ils sont y sont tous ! </p>
            <div class="map"><iframe src="https://www.google.com/maps/d/embed?mid=1Hr09jyH42qxuyb1vpmlcEhXUoFEvW_Lj" width="99%" height="480"></iframe></div>
    
        </section>

        <div class="join-us">
            <h2>Nous rejoindre</h2>
            <p>On recherche un quatrième joueur ou joueuse pour rejoinre l'équipe. <br> Mentalité compétitive et fortes connaissances en matière de pêche electronique sont recquises !</p>
            <form>
                
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

            </form>
        </div>
        <?php include('footer.php')?>
        <script src="../src/script.js"></script>
</body>
</html>