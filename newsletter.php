<?php


    require_once "config.php";

    $email = $_POST['email'];

    $query = "SELECT email FROM $table where email='$email'";

    $result = $dbc->query($query);

    if($result->num_rows>0){

        $res= 'This mail has been already subscribed.';

    }else{

        $date = date("Y-m-d H:i:s");
        $query="INSERT INTO $table (email,date_time) VALUES ('$email','$date')";

        mysqli_query($dbc,$query)
            or die('Error inserting email' . mysqli_error($dbc));
        
        $res= "You have been successfully added.";
    }

    mysqli_close($dbc);

    header("Location:index.php?resultat=".$res);





?>