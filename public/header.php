<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nav bar responsive</title>
</head>
<body>
    <header id="navbar">      
        <div class="logo" id="logo"><img src="../src/img/saumonslogo.png"></div>
        <input id="toggler" class="toggler" type="checkbox" >
        <label for="toggler" class="menu-btn">
            <span><i class="fa fa-bars"></i></span>
        </label>    
        <nav id="navbar-right">    
            <ul>
                <li><a class="active" href="#">Accueil</a></li>
                <li><a href="#">Notre Equipe</a></li>
                <li><a href="#">En Direct</a></li>
                <li><a href="#">Evènements</a></li>
                <li><a href="#">Contactez-nous</a></li>            
            </ul>
        </nav>
    </header>
    <script src="../src/header.js"></script>
</body>
</html>