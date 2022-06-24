<?php

include "connect_order.php";

$nama = $_POST['name'];
$alamat = $_POST['address'];
$jenis = $_POST['subject'];
$jumlah = $_POST['message'];

mysqli_query($connect_order, "INSERT INTO order_data(nama, alamat, jenis, jumlah) VALUES('$nama', '$alamat', '$jenis', '$jumlah');");

header("Location: ../../index_loged_in.php");