<?php
    $bdd= new PDO('mysql:host=localhost;dbname=tifournier_junglefit','tifournier_junglefit','webweek2022');
    
    if(isset($_GET['email']) AND !empty($_GET['email'])){
        $getEmail=$_GET['email'];
        $recupMembers=$bdd->prepare('SELECT * FROM members WHERE email= ?');
        $recupMembers->execute(array($getEmail));
        if($recupMembers->rowCount()>0){
            $deleteMembers=$bdd->prepare('DELETE FROM members WHERE email= ?');
            $deleteMembers->execute(array($getEmail));
            header('location:admin.php');
        }else{
            echo "aucun coureur trouvé";
        }
    }else{
        echo "aucun eamil trouvé";
    }
?>