					<?php

              include ("../db/db.php");

               //Registering users
              function RegUser(){

              //inserting register user data to passenger table  
              include("../models/passenger.php"); 

             $insert_item="insert into passengers (fname,lname,address,phone,email,username,password) values
              ('$fname', '$lname','$adress','$mobile','$email','$uname','$password')";
              $Reguser=mysql_query($insert_item);
             
           
                }


               //validating weather user is previously registered 
              function validatingUser(){

               include("../models/passenger.php"); 

               $search_user="select * from passengers where email='$email' or username='$uname'";
               $run_sql_query=mysql_query($search_user);

               if(mysql_num_rows($run_sql_query)>0){

                    echo"<script>
                    alert('This Email or username is previously used.try  again!!');
                    window.open('index.php','_self')
                    </script>";
                   
                    exit();

               }else{

                 $sac="
                 Hey,
     
                Thanks for Registering with Travel Hunt .Your smart card will be recived to your adress within 14 days.
                If it is not recived contact us. 


                                                             Thank You.
                                                          — travelHunt —";
              mail($email, "Email Confimation Message of Trvel hunt Website", $sac,"From:autopartlk@gmail.com");

                   RegUser();
               }


              }





              //registering userAccount
              function userAccount()
              {
              include ("../db/db.php");


              include("../models/passenger.php"); 
               $search_user_id="select * from passengers where email='$email'";
               $run_sql_query=mysql_query($search_user_id);


               while ($array=mysql_fetch_array($run_sql_query)) {
                 
                 $usreid=$array['pid'];

               }

              $today=date("Y-m-d");
              $insert_item="insert into account (passenger,create_date,amount,loan) 
              values ('$usreid','$today',0,300)";
              $Reguser=mysql_query($insert_item);


             
              //Register smart card
              $search_account_id="select * from account where passenger='$usreid'";
               $run_sql_query=mysql_query($search_account_id);


               while ($smart=mysql_fetch_array($run_sql_query)) {
                 
                 $account=$smart['aid'];

               }

              //genarating the smartcard ID
               $code = rand();
               $smcard="SM".$code;
               $today=date("Y-m-d");

              $insert_smart="insert into smartcard (id,account_id,create_date) 
              values ('$smcard','$account',$today)";
              $Reguser=mysql_query($insert_smart);

              echo"<script>
              alert('You account Successfully registered.please check your Email!!');
              window.open('index.php','_self')
              </script>";
             
              }



              //calling methodes after singup button clicked
              if (isset($_POST['regsubmit'])) {

               validatingUser();
               userAccount();

            }




					 ?>