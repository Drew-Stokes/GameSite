<?php 
//********************************
// File: dbc.php
// Connect Read-only to MySql database via PHP
//**********************************

    $host = "localhost";
    $userName = "astokesm_410rdo";
    $passWord = "Rohchamp1";
    $dataBase = "astokesm_gameSite";

    $con = mysqli_connect($host, $userName, $passWord, $dataBase);

    $connection_error = mysqli_connect_error();
    if($connection_error != null){
        echo "<p>Error connecting to database: $connection_error </p>";
    } else {
        // echo "Connected to Read-Only MySQL<br />"
    }
?>

<?php 
    $host = "localhost";
    $userName = "astokesm_410wrt";
    $passWord = "Rohchamp1";
    $dataBase = "astokesm_gameSite";

    $con = mysqli_connect($host, $userName, $passWord, $dataBase);

    $connection_error = mysqli_connect_error();
    if($connection_error != null){
        echo "<p>Error connecting to database: $connection_error </p>";
    } else {
        //echo "Connected to Read-Only MySQL<br />";
    }
?>