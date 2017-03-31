<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'connection.php';
if (isset($_GET['animal_id'])) {
    $animal_id  = $_GET['animal_id'];
    $query      = mysqli_query($conn, "DELETE FROM animal WHERE animal_id='$animal_id'");
    
    if ($query) {
        echo "Sukses Hapus";
        header('location: ./list_user.php');
    } else {
        echo "Gagal Hapus";
        header('location: ./list_user.php');
    }
}