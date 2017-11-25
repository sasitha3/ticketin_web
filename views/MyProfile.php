
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<html lang="en">
<?php 

include("head.php"); 

?>

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
					<a href="AfterLogin.php"><i style="font-size: 30px;" class="fa fa-home"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><a href="main.html">Travel Hunt</a></h5>
				</div>
				<div class="Profile-right">
										<a style="color:white;" href="MyProfile.php" > <i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['customeruname']; ?></a> 
					<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div>

						</div>
					</div>

					
				</div>
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   <div class="details-grid flight">
				<div class="details-shade ">
						<div class="details-right">
							<img src="images/logo.png" alt=" ">
							<h3><?php $username=$_SESSION['customeruname'];echo $username; ?></h3>
							<h4>You’re Profile Details.</h4>
								
							
						</div>


				
				</div>
			</div>

	<!-- //banner -->
	<!--bus --> 
            <div class="w3agile contact">
			       <h3 class="w3ls-title2">Your Profile Details</h3>
			       <div class="book-a-ticket">
							<div class=" bann-info">
								<form action="MyProfile.php" method="post">
									<div class="ban-top">
										<div class="bnr-left">
											<label class="inputLabel">First Name</label>
											<input name="fname" class="city" type="text" value="<?php echo $fname; ?>" >
										</div>
										
										<div class="bnr-left">
											<label class="inputLabel">Last Name</label>
											<input name="lname" class="city" type="text" value="<?php echo $lname; ?>" >
										</div>
											<div class="clearfix"></div>
									</div>
									 <div class="ban-bottom">
											<div class="bnr-right">
												<label class="inputLabel">Adress</label>
												<input name="adress" class="city" type="text" value=" <?php echo $adress; ?>" >
											</div>
											<div class="bnr-right">
												<label class="inputLabel">Phone</label>
												<input name="phone" class="city" id="datepicker1" type="text" value="<?php echo $phone; ?>" >
											</div>

											<!---/End-date-piker---->
										</div>
											<div class="ban-bottom">
											<div class="bnr-right">
												<label class="inputLabel">Account Amount</label>
												<input class="city" type="text" value="Rs: <?php echo $amount; ?>"  readonly >
											</div> 
											<div class="bnr-right">
												<label class="inputLabel">Loan Amount</label>
												<input  class="city"  type="text" value="Rs: <?php echo $loan; ?>" readonly>
											</div>

											<!---/End-date-piker---->
										</div>

										<div class="ban-bottom">

											<div class="bnr-right">
												<label class="inputLabel">Email</label>
												<input style="width: 193%;" class="city" id="datepicker1" type="text" value="<?php echo $email; ?>" readonly>
											</div>



											<!---/End-date-piker---->
										</div><br><br><br><br><br>
									<div style="margin-top: 43%; margin-left: 44%;">
									     <button type="submit" name="logout" class="btn btn-danger">Logout</button> 
									
									</div>

									<div style="    margin-top: -34px; margin-left: 68px;">
									     <button type="submit" name="update" class="btn btn-success">update</button> 
									
									</div>
								</form>
							</div>
					</div> 
			</div>
	<!-- //contact-->
	<!--footer-->
		<?php include("footer.php") ?>
	<!--footer-->
	</div>
</div>

	<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	    <script>
			$(document).ready(function() {
				$('.popup-top-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});																							
			}); 
		</script>
<!--//pop-up-box -->
 <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>