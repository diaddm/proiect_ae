<?php

    //get values from form
    $username = $_POST["user"];
    $password = $_POST["pass"];

    //prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    //$username = mysqli_real_escape_string($conn, $username);
    //$password = mysqli_real_escape_string($conn, $password);

    //connect to the database
    $link = mysqli_connect("localhost", "root", "", "test");

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    mysqli_select_db($link, "epapetaria");

    $result = mysqli_query($link, "select * from utilizatori where email = '$username' and parola = '$password'");


    $row = mysqli_fetch_array($result);
    if($row['email'] == $username && $row['parola'] == $password) {
        header("Location:home.html"); 
    } else {
        echo("User sau parola incorecte! Va rugam reincercati");
    }

?>