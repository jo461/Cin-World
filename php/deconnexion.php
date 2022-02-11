<!-- Tester si l'utilisateur est connecté -->
<?php
    session_start();
    if(isset($_GET['deconnexion']))
    { 
        if($_GET['deconnexion']==true)
        {  
            session_unset();
            header("location:login.php");
        }
    }
    else if($_SESSION['E_Mail'] !== ""){
        $user = $_SESSION['E_mail'];
        // Afficher un message
        echo "<br>Bonjour $user, vous êtes connectés";
    }
?>