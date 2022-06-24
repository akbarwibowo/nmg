<?php
    include("forms/connect_order.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets\img\my_logo.jpg">
    <title>Admin NMG</title>

    <style>
  table {
  border-collapse: collapse;
  width: 100%;
  }

  button{
    background-color: rgb(42, 170, 235);
    border: none;
  }

  button:hover{
    background-color: rgb(222, 43, 43);
  }

  th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  }

  tr:hover {background-color: rgb(42, 170, 235);}
  </style>
</head>
<body>
    <h2>Data Pesanan</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Action</th>
            
        </tr>

        <?php
        $sql = "SELECT * FROM   order_data;";
        $no = 1;
        $result = mysqli_query($connect_order, $sql);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>
                    <?php echo $no++;?>
                </td>
                <td>
                    <?php echo $data['nama']?>
                </td>
                <td>
                    <?php echo $data['alamat']?>
                </td>
                <td>
                    <?php echo $data['jenis']?>
                </td>
                <td>
                    <?php echo $data['jumlah']?>
                </td>
                <td>
                    <a href="edit_data.php?nama=<?php echo $data['nama'];?>">edit</a>
                    <button onclick="return confirm('Apakah anda yakin untuk menghapus '+'<?php echo $data['nama']?>'+'?')"><a href="delete_data.php?nama=<?php echo $data['nama'];?>">Hapus</a></button>
                    
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <fieldset style="width: fit-content;">
                <legend><h2>Menambahkan Data Pesanan</h2></legend>
                <form action="forms/admin_order.php" method="post">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> <input type="text" name="name" id="name" required>  </td>
                        </tr>
    
                        <tr>
                            <td>Alamat</td>
                            <td> <input type="varchar" name="address" id="address" required> </td>
                        </tr>
    
                        <tr>
                            <td>Jenis</td>
                            <td><input type="varchar" name="subject" id="subject" required> </td>
                        </tr>
                        <tr>
                            <td>
                                Jumlah
                            </td>
                            <td> <input type="varchar" name="message" id="message" required> </td>
                        </tr>
                        <tr>
                            <td> <button type="submit">Kirim</button> </td>
                        </tr>
                    </table>
                </form>

     </fieldset>

     <br>

     <button> <a href="sign-up-login-form/dist/logout.php">logout</a> </button>


</body>
</html>