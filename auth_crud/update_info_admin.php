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
        <title>Update Biodata</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            function validasi_input(form) {
                
                var pola_username   = /^[a-zA-Z0-9\_\-]{6,100}$/;
                var pola_email      = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                var username = form.username.value;
                var password = form.password.value;
                var repassword = form.repassword.value;
                var email  = form.email.value;
                
                var born   = form.born.value;
                var address    = form.address.value;
                var website    = form.website.value;
                var phone      = form.phone.value;


                if (username == "") {
                    alert("username masih kosong");
                    form.username.focus();
                    return (false);
                } else if (username.length < 3) {
                    alert("username terlalu pendek");
                    form.username.focus();
                    return (false);
                } else if (username.length > 30) {
                    alert("username terlalu panjang");
                    form.username.focus();
                    return (false);
                }
                
                if (pola_username.test(username)) {
                    alert ("username hanya boleh huruf atau angka!");
                    form.username.focus;
                    return (false);
                }

                if (password == "") {
                    alert("password masih kosong");
                    form.password.focus();
                    return (false);
                } else if (password.length < 3) {
                    alert("password terlalu pendek");
                    form.password.focus();
                    return (false);
                } else if (!(password == repassword)) {
                    alert("password tidak sama");
                    form.password.focus();
                    return (false);
                }
                
                if(pola_email.test(email)) {
                    alert('Penulisan Email tidak benar');
                    form.email.focus();
                    return false;
                }
                
                function check_radio (radio) {
                    for (i = 0; i < radio.length; i++) {
                        if (radio[i].checked == true) {
                            return radio[i].value;
                        }
                    }
                    return false;
                }
                
                var radio_val = check_radio(form.sex);
                if (radio_cal == false) {
                    alert("Anda belum memilih jenis kelamin!");
                    return false;
                }
                
                

                return (true);
            }
        </script>
        <?php
            require 'connection.php';
            
            if (isset($_POST['submit'])) {
                $username       = $_POST['username'];
                $password       = $_POST['password'];
                $email          = $_POST['email'];
                $born           = $_POST['born'];
                $sex            = $_POST['sex'];
                $phone          = $_POST['phone'];
                $address        = $_POST['address'];
                $bio            = $_POST['bio'];
                $website        = $_POST['website'];
                
                $query = mysqli_query($conn, "UPDATE user SET username='$username', password='$password', email='$email', born='$born', sex='$sex', phone='$phone', address='$address', bio='$bio', website='$website' WHERE user_id='$user_id'");
                if ($query) {
                    header('location: ./home_user.php');
                } else {
                    echo "Gagal update";
                }
                
            }
            
            if (isset($_GET['user_id'])) {
                $user_id    = $_GET['user_id'];
                $query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$user_id'");
                $hasil = mysqli_fetch_array($query);
            }
        ?>
    </head>
    <body>
        <h1>Edit Data Berita</h1>
        <form method="POST" onsubmit="return validasi_input(this)">
            <input type="hidden" name="id_user" value="<?php echo $hasil[0] ?>">
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
                    <td>Repassword</td>
                    <td><input type="password" name="repassword"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td><input type="date" name="born"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="sex" value="male"> Laki-laki <br>
                        <input type="radio" name="sex" value="female"> Perempuan <br>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Nomer Telepon</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td><input type="text" name="website"></td>
                </tr>
                <tr>
                    <td>Bio</td>
                    <td><textarea rows="4" cols="50" name="bio"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="UPDATE"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
