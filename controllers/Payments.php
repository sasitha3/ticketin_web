<?php

include ("../db/db.php");
session_start();

function DoPayment(){

	$uname=$_SESSION['customeruname'];

	 $query2="select * from passengers where username= '$uname'";
   	 $run_sql_query2=mysql_query($query2);

	while ($array2=mysql_fetch_array($run_sql_query2)) {  

		 $pid  =$array2['pid'];
         $fname=$array2['fname'];
         $lname=$array2['lname'];
         $email=$array2['email'];
         $phone=$array2['phone'];

}

	 $query3="select * from account where passenger= '$pid'";
   	 $run_sql_query3=mysql_query($query3);

	while ($array3=mysql_fetch_array($run_sql_query3)) {  

         $aid=$array3['aid'];


}

	 $query4="select * from smartcard where account_id= '$aid'";
   	 $run_sql_query4=mysql_query($query4);

	while ($array4=mysql_fetch_array($run_sql_query4)) {  

         $sid=$array4['id'];


}
	

	include("../views/payment.php");


	//proceed payment click button action
	if (isset($_POST['paysubmit'])) {
	
	//genarating Invocie Number
	$query="SELECT MAX(pid) from re_payment ";
	$run_sql_query=mysql_query($query);
	while ($art=mysql_fetch_array($run_sql_query)) {
		$value=$art['MAX(pid)'];
	}

	$invoiceno="SP-".($value+1) ; //invoice number
	$amountrecharge=$_POST['value']; //recharge amount
	date_default_timezone_set("Asia/Colombo");
	$today=date("Y-m-d");  //date
	$time=date("h:i:sa"); //time

	//Inserting to re_paymnet Table
	$insert_query="insert into re_payment (invoice,smart_id,type,date,time,re_amount) values ('$invoiceno','$sid','Credit','$today','$time','$amountrecharge')";

	 $Reguser=mysql_query($insert_query);

	 //updating account table
	 $getquery="select * from account where aid='$aid'";
	 $run_getQuery=mysql_query($getquery);
	 while ($arrval=mysql_fetch_array( $run_getQuery)) {
	 	$amount=$arrval['amount'];
	 	$loan=$arrval['loan'];
	 }

	 //checking loan amount
	 if($loan>0){

	 	$newamountloan=$loan-$amountrecharge;


	 	if($newamountloan<0){

	 		$nowamount=$amount-$newamountloan;
	 		$updateloan="UPDATE account SET amount='$nowamount',loan=0 where aid='$aid' ";
	 		$run_updateloan=mysql_query($updateloan);
	 		echo"<script>
			alert('Your Payment have been done Successfully ');
			window.open('payments.php','_self')
			</script>";

	 	}else if($newamountloan==0){

	 		$updateloan="UPDATE account SET loan=0 where aid='$aid' ";
	 		$run_updateloan=mysql_query($updateloan);
	 		echo"<script>
			alert('Your Payment have been done Successfully '');
			window.open('payments.php','_self')
			</script>";



	 	}else if($newamountloan>0){

	 		$updateloan="UPDATE account SET loan='$newamountloan' where aid='$aid' ";
	 		$run_updateloan=mysql_query($updateloan);
	 		echo"<script>
			alert('Your Payment have been done Successfully ');
			window.open('payments.php','_self')
			</script>";

	 	}




	 }else{

	 	$newamountvalue=$amount+$amountrecharge;
	 	$updateloan="UPDATE account SET amount='$newamountvalue',loan=0 where aid='$aid' ";
	 	$run_updateloan=mysql_query($updateloan);
	 		echo"<script>
			alert('Your Payment have been done Successfully');
			window.open('payments.php','_self')
			</script>";

	 }

			

	}


}



DoPayment();	


	
	





?>