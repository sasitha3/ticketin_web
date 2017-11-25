<?php

include ("../db/db.php");

//Get profile details to show
function GetProfileDetails(){

	session_start();
	$uname=$_SESSION['customeruname'];

	$query2="select * from passengers where username= '$uname'";
   	 $run_sql_query2=mysql_query($query2);

	while ($array2=mysql_fetch_array($run_sql_query2)) {  
		 $pid  =$array2['pid'];
         $fname=$array2['fname'];
         $lname=$array2['lname'];
         $adress=$array2['address'];
         $phone=$array2['phone'];
         $email=$array2['email'];
         

}

	$query3="select * from account where passenger= '$pid'";
   	 $run_sql_query3=mysql_query($query3);

	while ($array3=mysql_fetch_array($run_sql_query3)) {  

		 $amount  =$array3['amount'];
		 $loan    =$array3['loan'];
        
        
}

include("../views/MyProfile.php");

//if logout button clicked
if (isset($_POST['logout'])) {
	
	echo "<script>window.open('Logout.php','_self')</script>";
}

//if update button clicked
if(isset($_POST['update'])) {

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$adress=$_POST['adress'];
	$phone=$_POST['phone'];

	$passenger_update="UPDATE passengers SET fname='$fname',lname='$lname',address='$adress',phone='$phone'  where username='$uname' ";
	$run_updatepas=mysql_query($passenger_update);
	echo "<script>alert('profile successfully updated !! ');</script>";


}

}

GetProfileDetails();

 ?>