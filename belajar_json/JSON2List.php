<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>JSON to list</title>
    </head>
    <body>
        <script>
            var mahasiswa = [
                {
                    "nama"      : "Abdul",
                    "gender"    : "M",
                    "smt"       : 3,
                    "ipk"       : 3.25
                },
                {
                    "nama"      : "Arif",
                    "gender"    : "M",
                    "smt"       : 5,
                    "ipk"       : 3.05
                },
                {
                    "nama"      : "Fauzi",
                    "gender"    : "M",
                    "smt"       : 1,
                    "ipk"       : 3.20
                },
                {
                    "nama"      : "Dina",
                    "gender"    : "F",
                    "smt"       : 7,
                    "ipk"       : 3.00
                },
                {
                    "nama"      : "Citra",
                    "gender"    : "L",
                    "smt"       : 4,
                    "ipk"       : 3.50
                },
                {
                    "nama"      : "Eko",
                    "gender"    : "M",
                    "smt"       : 2,
                    "ipk"       : 3.09
                }
            ];
            
            document.write("<ul>");
            for (i in mahasiswa) {
                document.write("<li>");
                document.write(mahasiswa[i].nama + " | ");
                document.write(mahasiswa[i].gender + " | ");
                document.write(mahasiswa[i].smt + " | ");
                document.write(mahasiswa[i].ipk + " | ");
                document.write("</li>");
            }
            document.write("</ul>");
        </script>
    </body>
</html>