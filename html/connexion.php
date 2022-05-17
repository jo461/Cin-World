<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/inscription.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>
    <div id="form">
    <form action="../php/connexion.php" name="login" method="POST">
        
       
            <img src="../images/connexion.png" class="img_co" alt="Icône de connexion.">

            <h1> Connexion </h1>
            
            <label><br /><br /> E-mail </label>

            <input class="mail" type="text" name="Mail" placeholder="Votre E-mail">

            <label> Mot de passe </label>

            <input class="mdp" type="password" name="Mot_de_passe" placeholder="Votre mot de passe">

            <input class="button" type=submit value="Connexion">

            
        
    </form>
        <a href="inscription.php" target="blank"><input class="button" type=submit value="S'inscrire"></a>
    </div>
        
    
</body>
</html>