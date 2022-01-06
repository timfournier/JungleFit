<?php
    
    
    session_start();
    
    
    $bdd= new PDO('mysql:host=localhost;dbname=tifournier_junglefit','tifournier_junglefit','webweek2022');
    if(!$_SESSION['mdp']){
        header('location:connexion.php');
        
    }
    session_destroy();

    if(isset($_POST['envoi'])){
        if(!empty($_POST['email']) AND !empty($_POST['date_time'])){

            $email=htmlspecialchars($_POST['email']);
            $date=htmlspecialchars($_POST['date_time']);

            $insererMembers=$bdd->prepare('INSERT INTO members(email,date_time)VALUES(?, ?)');
            $insererMembers->execute(array($email,$date));

            echo "nouveau coureur ajouté";
        }
    }else{
        echo "Veuillez compléter tous les champs";
    }
    
?>




<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ajouter un Members</title>
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" name="email" placeholder="email">
            <br>
            <input type="text" name="date_time" placeholder="date">
            <br>
            <input type="submit" name="envoi">
        </form>
    </body>


<?php
     $recupMembers=$bdd->query('SELECT * FROM members');
     while($Members=$recupMembers->fetch()){
         ?>
         <div class="coureur" style="border:1px solid black;">
            <p><?php echo $Members['email'];?></p>
            <p><?php echo $Members['date_time'];?></p>
            
            <a href="delete.php?email=<?= $Members['email'];?>">
                <button style="color:white; background-color:red;padding:8px 15px;border:none;">Supprimer Members</button>
            </a>
            <a href="update.php?email=<?= $Members['email'];?>">
                <button style="color:white; background-color:red;padding:8px 15px;border:none;">Modifier Members</button>
            </a>
         </div><?php    
     }
?>
</html>