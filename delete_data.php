<?php

include "forms/connect_order.php";
$nama = $_GET['nama'];

$delete = "DELETE FROM order_data WHERE nama='$nama';";

mysqli_query($connect_order, $delete) or die("errorr");

header("Location: admin.php?delete=success");