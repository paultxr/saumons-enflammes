
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="../src/style.css" rel="stylesheet">
    <title>L'équipe des saumons</title>
</head>
<body>
<?php include('header.php')?>
    <div class="parallax-boutique">

        <div class=title-background><h1>La poissonnerie</h1></div>

    </div>

    <section class="intro">

        <h2>GOODIES ET ACCESSOIRES</h2>
        <p>Retrouvez ici tous les accessoires indispensables pour devenir un expert sur Fishing Sim World Tour ! Vivez une vraie séance de pêche depuis votre salon grâce au "Fishing Simulateur" ! Marre des fils de pêche ? Aucun problème, il y a la canne à pêche bluetooth ! Exprimez votre passion pour la pêche en portant des superbes sandales en forme de poisson ou en décorant votre mur avec le saumon chantant ! Il y a forcément quelque chose qui vous correspond dans "la poissonerie".</p>

    </section>


    <section class="shopping-content">

    
        <form  action="shop.php"  method="post">
                <img src="../src/img/peche-simulateur.jpg"  class="shopping-img" width=80% alt="fishing-simulator">
                <h3>SET UP : Simulateur de pêche pour salon</h3>
                <p class="price">2349.99 €</p>
                <input class="shopping" type="text" id='name' name="articleName" value='Simulateur de peĉhe'>
                <input class="shopping" type="text" id='price' name="price" value="2349">
                <button class="button-shop" type="submit">Ajouter</button>
                
            </form>

            <div class="caddy">

            

            </div>

           


            <form  action="shop.php"  method="post">
                <img src="../src/img/hat.jpg" class="shopping-img" alt="bob de pêche" width="80%">
                <h3>Parapluie de tête motif camouflage</h3>
                <p class="price">8.99 €</p>
                <input class="shopping" type="text" value="Parapluie de tête motif camouflage">
                <input class="shopping" type="text" value="8.99">
                <button class="button-shop" type="submit">Ajouter</button>
            </article>

            </form>

            <form  action="shop.php"  method="post">
                 
                <img src="../src/img/fish-shoes.jpg"  class="shopping-img" width=80% alt="fishing-shoes">
                <h3>Pantoufles truite</h3>
                <p class="price">14.99 €</p>
                <input class="shopping" type="text" value="Pantoufles truite">
                <input class="shopping" type="text" value="14.99">
                <button class="button-shop" type="submit">Ajouter</button>
                
            </form>

            <form  action="shop.php"  method="post">
                <img src="../src/img/singing-salmon.jpg" alt="singing salmon" class="shopping-img" width="80%">
                <h3>Saumon chantant Fixation Facile</h3>
                <p class="price">12.99 €</p>
                <input class="shopping" type="text" value="Saumont chantant">
                <input class="shopping" type="text" value="12.99">
                <button class="button-shop" type="submit">Ajouter</button>
            </form>

            <form  action="shop.php"  method="post">
                <img src="../src/img/canne-peche.jpg" alt="fishing-cane" class="shopping-img" width="80%">
                <h3>Canne à pêche bluetooth</h3>
                <p class="price">34.99 €</p>
                <input class="shopping" type="text" value="canne à pêche bluetooth">
                <input class="shopping" type="text" value="34.99">
                <button class="button-shop" type="submit">Ajouter</button>
            </form>


            <form  action="shop.php"  method="post">
                <img src="../src/img/veste.jpg" class="shopping-img" width=80% alt="jacket">
                <h3>Véritable veste de pêcheur</h3>
                <p class="price">8.99 €</p>
                <input class="shopping" type="text" value="Véritable veste de pêcheur">
                <input class="shopping" type="text" value="9.99">
                <button class="button-shop" type="submit">Ajouter</button>
                
            </form>

            <form  action="shop.php"  method="post">
                <img src="../src/img/cuvette.jpg" class="shopping-img" alt="fish-toilets" width="80%">
                <h3>Cuvette qui donne la pêche</h3>
                <p class="price">13.90 €</p>
                <input class="shopping" type="text" value="Cuvette qui donne la pêche">
                <input class="shopping" type="text" value="13.90">
                <button class="button-shop" type="submit">Ajouter</button>
            </form>

            <form  action="shop.php"  method="post">
                <img src="../src/img/poisson-pour-chat.jpg" class="shopping-img" width=80% alt="poisson-pour-chat">
                <h3>Poisson en plastique pour chat</h3>
                <p class="price">8.99 €</p>
                <input class="shopping" type="text" value="Poisson en plastique pour chat">
                <input class="shopping" type="text" value="8.99">
                <button class="button-shop" type="submit">Ajouter</button>
            </form>
          
        </div>
    
    </section>

    <div class="join-us">
            <h2>Nous rejoindre</h2>
            <p>On recherche un quatrième joueur ou joueuse pour rejoinre l'équipe. <br> Mentalité compétitive et fortes connaissances en matière de pêche electronique sont recquises !</p>
                            
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