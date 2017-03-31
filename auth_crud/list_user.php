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
        <title>Daftar User</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <h1>Daftar User</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID User</th>
                <th>Username</th>
                <th>Privilage</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nomer</th>
                <th>Alamat</th>
                <th>Website</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
            <?php
                require 'connection.php';
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM user");
                while ($hasil = mysqli_fetch_array($query)) { ?>
                
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $hasil['user_id'] ?></td>
                    <td><?php echo $hasil['username'] ?></td>
                    <td><?php echo $hasil['privilage'] ?></td>
                    <td><?php echo $hasil['email'] ?></td>
                    <td><?php echo $hasil['born'] ?></td>
                    <td><?php
                        if($hasil['sex'] == "m") {
                            echo 'laki-laki';
                        } else {
                            echo 'perempuan';
                        }  
                         ?>
                    </td>
                    <td><?php echo $hasil['phone'] ?></td>
                    <td><?php echo $hasil['address'] ?></td>
                    <td><?php echo $hasil['website'] ?></td>
                    <td><?php echo $hasil['bio'] ?></td>
                    <td>
                        <!-- <a href="update.php?animal_id=<?php //echo $hasil[0]?>">Update</a> -->
                        <a href="delete.php?animal_id=<?php echo $hasil[0]?>">Delete</a> 
                    </td>
                </tr>
                <?php } ?>
        </table>
    </body>
</html>

