<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        require 'connection.php';
        session_start();
        if ($_SESSION['username']) {
            echo "Home User, selamat datang: " . $_SESSION['username'];?>
        <br>
        <a href="update_info_user.php">Update Info user</a><br>
        <a href="logout.php">Logout</a>
        
        <?php } else {
            header('location: ./login.php');
        }
        ?>
        
        <h1>Data Ternak</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>janis Hewan</th>
                <th>Berat</th>
                <th>Status</th>
                <th>Jenis Kelamin</th>
                <th>Pembiakan</th>
                <th>Warna</th>
                <th>Tanggal Lahir</th>
            </tr>
            <?php
                require 'connection.php';
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM animal");
                while ($hasil = mysqli_fetch_array($query)) { ?>
                
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $hasil[1] ?></td>
                    <td><?php echo $hasil[2] ?></td>
                    <td><?php echo $hasil[3] ?></td>
                    <td><?php echo $hasil[4] ?></td>
                    <td><?php echo $hasil[5] ?></td>
                    <td><?php echo $hasil[6] ?></td>
                    <td><?php echo $hasil[7] ?></td>
                </tr>
                <?php } ?>
        </table>
        
    </body>
</html>

