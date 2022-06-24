<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'login_nmg';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("unable to connect");