<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <header>
        <p>CineWorld</p>
       <!-- <button class="button">Déconnexion</button>!-->
        <form action="films.php">
            <button class="button" type="submit">Films</button>
        </form>
        <form action="index.php">
            <button class="button1" type="submit">Accueil</button>
        </form>
        <form action="../php/deconnexion.php">
            <button class="button2" type="submit">Déconnexion</button>
        </form>    
    </header>  
    <br>
    <br>
    <br>
    <div id="films"><a href="films.php" title="page film">Films</a></div>
    <div id="series"><a href="series.php" title="page séries">Séries</a></div>
    <br>
    <br>
    <div class="soustitres">Les mieux notés</div>
    <br>
    <div class="container">
        <img src="../images/jurassic_world.jpg" alt="Affiche du film" style="width:165px">
        <form action="../html/jurassic_world.php">  
        <button  class="btn" type="submit">Jurassic World</button>
        </form>
    </div>
    <div class="container">
        <img src="../images/matrix.jpg" alt="Affiche du film" title="Matrix" style="width:172px">
        <form action="../html/matrix.php">
            <button  class="btn" type="submit">Matrix</button>
        </form>
    </div>
    <div class="container">
        <img src="../images/alien.jpg" alt="Affiche du film" title="Alien" style="width:165px">
        <form action="../html/alien.php">
            <button class="btn" type="submit">Alien</button>
        </form>
    </div>
    <div class="container">
        <img src="../images/harry_potter.jpg" alt="Affiche du film" title="Harry_Potter" style="width: 170px">
        <form action="../html/harry_potter.php">
            <button class="btn" type="submit">Harry Potter</button>
        </form>
    </div>
    <div class="container">
        <img src="../images/ready_player_one.jpg" alt="Affiche du film" title="Ready_Player_One" style="width:158px">
        <form action="../html/ready_player_one.php">  
        <button id="btn1" class="btn" type="submit">Ready Player One</button>
        </form>
    </div>
    
</body>
</html>