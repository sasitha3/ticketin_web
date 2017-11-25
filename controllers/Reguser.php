<?php 



             $insert_item="insert into passengers (fname,lname,address,phone,email,username,password) values
              ('$fname', '$lname','$adress','$mobile','$email','$uname','$password')";
              $Reguser=mysql_query($insert_item);

              if ($Reguser) {
              	echo "Test Success";
              }else{

              	echo "Test failes.Error" ;


              }








?>