<?php

include "connect.php";

session_start();

if(isset($_POST['signup-button'])){    
    $username = $_POST['username'];
    $password = $_POST['pswd'];

    $_SESSION['is_login'] = true;
    $_SESSION['name'] = $username;


    if(empty($username) || empty($password)){
        header("Location: login_page.html?emptyField");
        exit();
    }

    
    mysqli_query($conn, "INSERT INTO login_data_nmg(usr, pswd) VALUES('$username', '$password');") or die(exit(header("Location: login_page.html?error")));

    header("Location: ../../index_loged_in.php?signup=success");
}