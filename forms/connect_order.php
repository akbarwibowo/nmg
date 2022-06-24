<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "order";

$connect_order = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("unable to connect");