<?php 

include ("../db/db.php");



//get trp details
function GetTripData(){

	 $recid  = $_GET['id'];

	 $query2="select * from trip where tripid= $recid";
   	 $run_sql_query2=mysql_query($query2);

	while ($array2=mysql_fetch_array($run_sql_query2)) {  

         $date=$array2['date'];
         $current=$array2['current'];
         $destination=$array2['destination'];
         $dis=$array2['distance'];
         $cost=$array2['cost'];
         $sid=$array2['sid'];
   	 


   	$query7="select * from  stations where station_id='$current'";
	$run_sql_query7=mysql_query($query7);

	while ($array7=mysql_fetch_array($run_sql_query7)) {        
         $currentlocationval=$array7['name'];

   	 }

   	$query8="select * from  stations where station_id='$destination'";
	$run_sql_query8=mysql_query($query8);

	while ($array8=mysql_fetch_array($run_sql_query8)) {        
         $destinationval=$array8['name'];


   	 }


   	 $query3="select * from smartcard where id='$sid '";
   	 $run_sql_query3=mysql_query($query3);

	while ($array3=mysql_fetch_array($run_sql_query3)) {  

         $aid=$array3['account_id'];

   	 }


   	 $query4="select * from account where aid='$aid '";
   	 $run_sql_query4=mysql_query($query4);

	while ($array4=mysql_fetch_array($run_sql_query4)) {  

         $pid=$array4['passenger'];

   	 }


   	 $query5="select * from passengers where pid='$pid '";
   	 $run_sql_query5=mysql_query($query5);

	while ($array5=mysql_fetch_array($run_sql_query5)) {  

         $uemail=$array5['email'];

   	 }


     include("../views/recipt.php");

     if(isset($_POST['emailsub'])){
     		       $sac="
                 Hi,
     
                   Below we have provided the requested recipt details.

                   start location:  $currentlocationval
                   Destination   :  $destinationval
                   cost          :  Rs: $cost
                   Date          :  $date
                   Distance      :  $dis Km


                                                             Thank You.
                                                          — travelHunt —";
              mail($uemail, "travel hunt Recipt", $sac,"From:autopartlk@gmail.com");
               echo"<script>
              alert('Your Recipt have been send to your Email.please check your Email!!');
              
              </script>";
     }

}
	

}

GetTripData();


?>