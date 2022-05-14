<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/inscription.css" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <div id="form">
        <form action="../php/recuperation_info.php" name="login" method="POST">
        
            <img src="../images/connexion.png" class="img_co" alt="Icône de connexion.">

            <h1> Inscription </h1>
            <label><br /> Nom </label>

            <input class="Nom" type="text" name="Nom" placeholder="Votre nom">

            <label> Prénom </label>

            <input class="Prenom" type="text" name="Prenom" placeholder="Votre prénom">

            <label><br /><br /> E-mail </label>

            <input class="mail" type="text" name="Mail" placeholder="Votre E-mail">

            <label> Mot de passe </label>

            <input class="mdp" type="password" name="Mot_de_passe" placeholder="Votre mot de passe">

            <label> Vérification mot de passe </label>

            <input class="mdp2" type="password" name="Mot_de_passe_verif" placeholder="Vérifiez votre mot de passe"> <!--Attention tu es bête tu n'as pas mis d'alerte pour si les deux mots de passe sont différents-->

            <input class="button" type=submit value="S'inscrire">


            
        
        </form>
    <a href="connexion.html" target="_blank"><input class="button" type=submit value="Connexion"></a>
    </div>
</body>
</html>