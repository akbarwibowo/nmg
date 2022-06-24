<?php

include "forms/connect_order.php";

$nama = $_GET['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets\img\my_logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>
        Mengedit Data Atas Nama : <?php echo $nama ?>
    </h1>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>
                    Jenis
                </td>
                <td>
                    <input type="text" name="jenis" placeholder="masukkan jenis baru">
                </td>
            </tr>

            <tr>
                <td>
                    Jumlah
                </td>
                <td>
                    <input type="text" name="jumlah" placeholder="masukkan jumlah baru">
                </td>
            </tr>
            <tr>
                <td>
                <button type="submit" name="edit">Edit</button>
                </td>

                <button name="cancel">cancel</button>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['edit'])){
            $jenis = $_POST['jenis'];
            $jumlah = $_POST['jumlah'];
            $sql = "UPDATE order_data SET jenis='$jenis', jumlah='$jumlah' WHERE nama='$nama';";

            mysqli_query($connect_order, $sql) or die(header("Location: admin.php?terjadieror"));

            header("Location:admin.php?edit=success");
        } else if(isset($_POST['cancel'])){
            header("Location: admin.php?editCancelled");
        }
    ?>
</body>
</html>