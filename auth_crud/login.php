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
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
<?php
require 'connection.php';
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' LIMIT 1");

    $hasil = mysqli_fetch_array($query);

    if (password_verify($password, $hasil['password'])) {
        $_SESSION['username'] = $hasil['username'];
        if ($hasil['privilage'] == 1) {
            header('location: ./home_admin.php');
        } else {
            header('location: ./home_user.php');
        }
    } else {
        echo 'Password salah!';
    }
}
?>
    </head>
    <body>
        <form method="POST">
              <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Masukkan Username" name="username" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Masukkan Password" name="password" required>

                    <button type="submit" name="submit">Login</button>
                  </div>
        </form>
    </body>
</html>
