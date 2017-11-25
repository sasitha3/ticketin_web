	<?php 

	include ("../db/db.php");

	//user login function implementation
	function LoginUser(){

		session_start(); 

		$uname=$_POST['uname'];
		$password=$_POST['Password'];

		$query="select * from passengers where username='$uname' AND password='$password'";
		$run_query=mysql_query($query);

		$check_customer=mysql_num_rows($run_query);
		
		
	
		if ($check_customer==0) {
             echo "  <script>alert('Password or username is not valid!!.');
                    window.open('index.php','_self')
                    </script>";
			
			exit();

		}else{

				$_SESSION['customeruname']=$uname;
             	header('location:AfterLogin.php');

			}
		

	}

	
	//when user clock login button
	if(isset($_POST['signIn'])){


		LoginUser();


	}





?>