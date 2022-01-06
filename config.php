<?php



$user = "tifournier_junglefit";
$password = "webweek2022";
$host = "localhost";
$dbase = "tifournier_junglefit";
$table = "members";


$dbc = mysqli_connect($host, $user, $password, $dbase) or die("Unable to connect");
