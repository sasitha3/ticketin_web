
<!DOCTYPE html>

<html lang="en">
<!--head section-->
<?php include("head.php"); ?>
<!--end of head-->
<body>
<div class="body-back">
	<div class="masthead pdng-stn1">
		<div id="menu" class="panel" role="navigation">
			<div class="wrap-content">
				<div class="profile-menu text-center">
					<img class="border-effect" src="images/logo.png" alt=" ">
						<h3>MENU</h3>

						<div class="pro-menu">
							<div class="logo">
								<li><a class=" link link--yaku  active" href="main.html"><span>H</span><span>o</span><span>m</span><span>e</span></a></li>
								<li><a class=" link link--yaku" href="about.html"><span>A</span><span>b</span><span>o</span><span>u</span><span>t</span></a></li>
								<li><a class=" link link--yaku" href="short-codes.html"><span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="destination.html"><span>D</span><span>e</span><span>s</span><span>t</span><span>i</span><span>n</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="contact.html"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
							</div>
				

						</div>
				</div>
			</div>
		</div>
		<div class="phone-box wrap push" id="home">
			<div class="menu-notify">
				<div class="profile-left">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><a href="main.html">Travel Hunt</a></h5>
				</div>
				<div class="Profile-right">
					
						<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div>
							<div class="login-form">
								<form action="../controllers/validateLogin.php" method="post">
									<p>User name </p>
									<input type="text" name="uname" required=""/>
									<p>User Password</p>
									<input type="password" name="Password" required=""/>	 
									<div class="wthree-text"> 

										<div class="clear"> </div>
									</div> 
									<button class="btn btn-success" type="submit" name="signIn" >SignIn</button> 	
											
								</form>
								<p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
							</div> 
						</div>
					</div>
					<!-- //modal --> 
					<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="login-modal">  
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div>
							<div class="login-form signup-form">
								<form action="../controllers/validRegister.php" method="post">

									<p1 id="lfname"></p1>
									<input   type="text" name="fname"  id="fname" required="" placeholder="First Name" value="" /><br/><br>

									<input type="text" name="lname" id="lname" required="" placeholder="last name"/><br/><br>

									<input type="text" name="uname" id="uname"  required="" placeholder="User Name"/><br/><br>									
									<input type="text" name="adress" id="adress"  required="" placeholder="Address"/><br/><br>

									<input type="text" name="phone" id="phone"  required="" placeholder="phone"/><br/><br>

									<input type="email" name="email" id="email" required="" placeholder="Email"/><br/><br>									
									<input type="password" name="password" id="pas" placeholder="password" required="" placeholder="Password"/>	<br/><br>
									<input type="password" name="Password" id="repas" placeholder="Retype Password" required=""/>										
									<div class="wthree-text"> 
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>I accept the terms of use</label> 
									</div>
									<button class="btn btn-success	" name="regsubmit" type="submit" onclick="check()" > Signup</button> 	
								</form> 
							</div> 
						</div>
					</div>

					
				</div>
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   <div class="details-grid">
				<div class="details-shade">
						<div class="details-right">
							<img src="images/logo.png" alt=" ">
							<h3>Welcome To Travel Hunt</h3>
							<h4>You’re going to like us.</h4>
								
							
						</div>
				     <div class="row">
   						 <div class="col-sm-6" >
   						 	<div  class="wthree_more wthree_more1">
								<a  href="#small-dialog" class="sign-in popup-top-anim button--wayra button--border-thick button button--size-s" >SignIn</a>
							</div>
   						 </div>
    					 <div class="col-sm-6" >
    					 	<div class="wthree_more wthree_more1">
								<a href="#small-dialog1" class="sign-in popup-top-anim button--wayra button--border-thick button button--size-s" >Signup</a>
							</div>
    					 </div>
 				     </div><br>
				</div>
			</div>

   <!-- //banner -->
   <!--/welcome-->
		        <div class="w3agile welcome"> 
					<h3 class="w3ls-title">Welcome !</h3> 
					<div class="b-bottom">
			<div class="col-md-6 banner_bottom_left">
				<h3>Best traveling partner</h3>
				<p><i>Ut enim ad minima veniam</i> Quis nostrum exercitationem ullam corporis suscipit 
					laboriosam, nisi ut r.</p>
				<div class="wthree_more wthree_more1">
					<a href="#" class="button--wayra button--border-thick button--text-upper button--size-s">Read More</a>
				</div>
			</div>
			
				</div>
		<!--//welcome-->
		<!--/footer-->
		 <?php include("footer.php") ?>
		<!--/footer-->
	
		<script type="text/javascript">
			function nameup(){
				console.log(fname.value);
				if(fname.value==''){
					fname.placeholder='First Name';
					var x="";
					document.getElementById("lfname").innerHTML=x;
				}else{
					fname.placeholder='';
					var x="First name";
					document.getElementById("lfname").innerHTML=x;
				}



			}

		</script>

		<script>
			function check(){

				var val1=document.getElementById('pas').value;
				var val2=document.getElementById('repas').value;



				if(val1!=val2){
					swal("please check Passwords!!");
					window.open('index.php','_self');
				}

			}


		</script>

</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>