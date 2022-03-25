<?php

session_start();

if (isset($_POST['Mail'], $_POST['Mot_de_passe'])) {
    $Mail = $_POST['Mail'];
    $Mot_de_passe = $_POST['Mot_de_passe'];

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=4tt_joan', 'joan', 'joan5');
        foreach($dbh->query("SELECT * from CineWorld where Mail='$Mail'") as $row) {
            header("Location:../html/index.html");
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

}
// Ajouter des cookies afin que l'utilisateur soit connecter sur tout le site et pas juste sur la page d'accueil.
?>
