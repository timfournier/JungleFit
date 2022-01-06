<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "1234";

        $pseudo_saisi= htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location:admin.php');
        }
        else{
            echo "Votre mot de passe est incorrect";
        }
        
    }else{
        echo "veuillez compléter tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/connexion.css">
        <title>Connexion Admin</title>
    </head>
    <body>
        <form method="POST" action="" >
            <p>Se connecter</p>
            <div class="inputs">
                <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off">
                <input type="password" name="mdp" placeholder="Mot de passe">
            </div>
            <div align="center">
                <button type="submit" name="valider">connexion</button>
            </div>
        </form>
    </body>
</html>