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
        <title>Register</title>
        <link rel="stylesheet" href="style.css">
        <?php
            require 'connection.php';
        
            if (isset($_POST['submit'])) {
                $username   = $_POST['username'];
                $password   = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $privilage  = $_POST['privilage'];
                
                $query  = mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password', '$privilage')");
                
                if ($query) {
                    header('location: ./login.php');
                } else {
                    echo "Gagal register";
                }
            }
            ?>
    </head>
    <body>
        <form method="POST">
            <u>REGISTER</u>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Hak akses</td>
                    <td>
                        <select name="privilage">
                            <option disabled selected>--pilih hak akses--</option>
                            <option value="1">Admin</option>
                            <option value="0">User biasa</option> 
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Register"></td>
                </tr>
            </table>
        </form>
    </body>
</html>