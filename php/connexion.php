<?php
    if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
?>
<?php
session_start();
if(isset($_POST['E_mail']) && isset($_POST['Mot_de_passe']))
{
    // Connexion à la base de données
    $db_username = 'joan';
    $db_password = 'joan5';
    $db_name     = '4tt_joan';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    $E_mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['E_mail'])); 
    $Mot_de_passe = mysqli_real_escape_string($db,htmlspecialchars($_POST['Mot_de_passe']));
    
    if($E_mail !== "" && $Mot_de_passe !== "")
    {
        $requete = "SELECT count(*) FROM goofu where 
              E_mail = '".$E_mail."' and Mot_de_passe = '".$Mot_de_passe."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // Nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['E_mail'] = $E_mail;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // Utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // Utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // Fermer la connexion
?>