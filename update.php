<?php
    $bdd= new PDO('mysql:host=localhost;dbname=tifournier_junglefit','tifournier_junglefit','webweek2022');
    
    if(isset($_GET['email']) AND !empty($_GET['email'])){
        $getEmail=$_GET['email'];

        $recupMembers=$bdd->prepare('SELECT * FROM members WHERE email=? ');
        $recupMembers->execute(array($getEmail));
        if($recupMembers->rowCount()>0){


            $infomembers=$recupMembers->fetch();
            $email=$infomembers['email'];
            $date=$infomembers['date_time'];
            

            if(isset($_POST['valider'])){

                $email_saisi=htmlspecialchars($_POST['email']);
                $date_saisi=htmlspecialchars($_POST['date']);
                

                $updateMembers=$bdd->prepare('UPDATE members SET email = ? , date_time= ?');
                $updateMembers->execute(array($email_saisi,$date_saisi));

                header('location:admin.php');

            }
            
        }

    }else{
        echo "aucun membre trouvé";
    }
?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ajouter un coureur</title>
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" name="email" placeholder="email" value="<?php $email; ?>">
            <br>
            <input type="text" name="date" placeholder="date" value="<?php $date; ?>">
            <br>
            <input type="submit" name="valider">
        </form>
    </body>
</html>