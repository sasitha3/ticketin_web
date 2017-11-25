<?php

$con=mysql_connect("188.166.187.121","wedding","Wedding@#0ne");
mysql_select_db("ticketing");

if($con==null){

	echo "<h1 style='color:red;''>oops db connection error</h1>";
}

?>
