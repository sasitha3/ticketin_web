<?php

include ("../db/db.php");
session_start(); 



//getting smartID value relevent to user
function getSmartID(){
	$username=$_SESSION['customeruname'];
	$query1="select * from passengers where username='$username'";
	$run_sql_query1=mysql_query($query1);

	while ($array1=mysql_fetch_array($run_sql_query1)) {        
         $userid=$array1['pid'];

   	 }

   	 $query2="select * from account where passenger='$userid'";
   	 $run_sql_query2=mysql_query($query2);

	while ($array2=mysql_fetch_array($run_sql_query2)) {        
         $aid=$array2['aid'];
   	 }

   	 $query3="select * from smartcard where account_id='$aid'";
   	 $run_sql_query3=mysql_query($query3);

	while ($array3=mysql_fetch_array($run_sql_query3)) {        
         $smartid=$array3['id'];
   	 }

	$query4="select * from  trip where sid='$smartid'";
	$run_sql_query4=mysql_query($query4);

	include("../views/tripshead.php");
	while ($array4=mysql_fetch_array($run_sql_query4)) {       

		 $tripid=$array4['tripid']; 
         $date=$array4['date'];
         $currentlocid=$array4['current'];
         $destinationid=$array4['destination'];
         $distance=$array4['distance'];
         $cost=$array4['cost'];
   	 

   	$query5="select * from  stations where station_id='$currentlocid'";
	$run_sql_query5=mysql_query($query5);

	while ($array5=mysql_fetch_array($run_sql_query5)) {        
         $currentlocation=$array5['name'];

   	 }

   	$query6="select * from  stations where station_id='$destinationid'";
	$run_sql_query6=mysql_query($query6);

	while ($array6=mysql_fetch_array($run_sql_query6)) {        
         $destination=$array6['name'];


   	 }

	   	     
		 
   	     include("../views/trips.php");

}
		include("../views/tripfooter.php");
}

getSmartID();





?>