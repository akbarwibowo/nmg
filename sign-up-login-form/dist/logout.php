<?php

session_start();

if(isset($_SESSION['is_login'])){
    unset($_SESSION);
    session_destroy();

    header("Location: ../../index.html?logout=success");
}