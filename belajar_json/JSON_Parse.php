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
        <title>JSON Parse</title>
    </head>
    <body>
        <script>
            var text = {
                "mahasiswa" : [
                    {
                        "firstName" : "Abdul",
                        "lastName"  : "Syukur"
                    },
                    {
                        "firstName" : "Arif",
                        "lastName"  : "Setiawan"
                    },
                    {
                        "firstName" : "Dina",
                        "lastName"  : "Aulia"
                    }
                ]
            };
            
            var obj = JSON.parse(text);
        </script>
    </body>
</html>