<?php
     function Username($username) {
          return preg_match('/^[a-z]{5,5}$/',$username) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (Username("sayaa")) {
         echo "Username Is Valid" ;
     } else {
         echo "Username Is Invalid" ;
     }
     
     function Password($password) {
         return preg_match('/^[0-9]{2}[@$]{1}[A-Z]{4}$/',$password) ;
     }
     if (Password("26@SAYA")) {
         echo "\nUsername Is Valid" ;
     } else {
         echo "Username Is Invalid" ;
     }
?>