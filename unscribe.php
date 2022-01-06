<?php





    require_once "config.php";

    $email = $_POST['email2'];

    $query = "DELETE FROM $table WHERE email='$email'";

    $result = mysqli_query($dbc,$query)
        or die( $res='Error removing email from database' . mysqli_error($dbc));


    $res = "You have been seccessfully unsubsrcibed.";

    mysqli_close($dbc);


    header("Location:index.php?resultat=".$res);

?>