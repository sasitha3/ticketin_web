
<?php
//--TEST--
//RegUser()  function - A basic test to see if it works.


//--FILE--

 // might need to adjust path if not in the same dir
include ("../db/db.php");

 $fname = 'test1';
 $lname = 'test2';
 $uname = 'test3';
 $adress= 'test4';
 $mobile='0111231231';
 $email = 'test@gmail.com';
 $password= 'test';

 include ('../controllers/Reguser.php');



//var_dump(Register($bar));

//--EXPECT--



?>