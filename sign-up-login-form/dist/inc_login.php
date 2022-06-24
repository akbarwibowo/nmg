<?php

include "connect.php";

session_start();

if(isset($_POST['login-button'])){
    $username = $_POST['username'];
    $password = $_POST['pswd'];

    $query = "SELECT * FROM login_data_nmg WHERE usr='$username' AND pswd='$password';";

    $queryDb = mysqli_query($conn, $query);
    
    $result = mysqli_fetch_array($queryDb, MYSQLI_ASSOC);

    $count = mysqli_num_rows($queryDb);
    if($username == "admin_wibowo" && $password == "wibowo"){
        $_SESSION['is_login'] = true;
        $_SESSION['name'] = $username;

        header("Location: ../../admin.php?loginadmin");
    }


    else if($count == 1){
        $_SESSION['name'] = $result;
        $_SESSION['is_login'] = true;

        header("Location: ../../index_loged_in.php?login=success");
    } else{
        echo "<script> alert('email/password salah');
        location.href = 'login_page.html';</script>";
        // exit(header("Location: login_page.html?login=error"));
    }
} else{
    return "not allowed";
}