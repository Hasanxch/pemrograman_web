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
        <link src="Excercise2.json" type="text/javascript"> 
    </head>
    <body>
        <script>
//           var alert = {
//               "errors" : [
//                   {
//                       "status" : "403",
//                       "source" : { "pointer"    : "/data/attributes/secret-power" },
//                       "title"  : null,
//                       "detail" : "Editing secret power is not authorization on Sundays."
//                   },
//                   {
//                       "status" : "422",
//                       "source" : { "pointer"    : "/data/attributes/volume" },
//                       "title"  : null,
//                       "detail" : "Volume does not, in fact, go to l1."
//                   },
//                   {
//                       "status" : "500",
//                       "source" : { "pointer"    : "/data/attributes/reputation" },
//                       "title"  : "The backend responded with an error",
//                       "detail" : "Reputation services not responding after three requests."
//                   }
//               ]
//           };

            var alert = $.getJSON('Excercise2.json');
           
           document.write("<table border=1px>");
           document.write("<tr>");
           document.write("<td>No</td><td>Status</td><td>Source</td><td>Title</td><td>Detail</td>");
           document.write("</tr>");
            for (i in alert.errors) {
                document.write("<tr>");
                document.write("<td>" + i + "</td>");
                document.write("<td>" + alert.errors[i].status + "</td>");
                document.write("<td>" + alert.errors[i].source.pointer + "</td>");
                if (alert.errors[i].title == null) {
                    document.write("<td> </td>");
                } else {
                    document.write("<td>" + alert.errors[i].title + "</td>");
                }
                //document.write("<td>" + alert.errors[i].title + "</td>");
                document.write("<td>" + alert.errors[i].detail + "</td>");
                document.write("</tr>");
            }
            document.write("</table>");
        </script>
    </body>
</html>