
<!DOCTYPE html>

<html lang="en">
<!--head section-->
<?php 
session_start(); 
include("head.php"); 

?>
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
					<a href="AfterLogin.php" ><i style="font-size: 30px;" class="fa fa-home fa-lg"></i></a>
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


								<p style="margin-left: 32px;">Do you want to Logout!!!.Logout from here ?</p><br><button style="margin-left: 33%;" class="btn btn-danger">Logout</button> 

						</div>
					</div>
					<!-- //modal --> 
					<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="login-modal">  
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div> 
						</div>
					</div>
					<!-- //modal-two --> 
					
				</div>
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   <div class="details-grid bus">
				<div class="details-shade ">
						<div class="details-right">
							<img src="images/logo.png" alt=" ">
							<h3>Hi</h3>
							<?php  

								

									$username=$_SESSION['customeruname'];
									# code...
								
								echo "<h4 style='font-size: 20px;''>$username .</h4>";

							 ?>
							
								
							
						</div>


				
				</div>
			</div>
		<h3 class="w3ls-title2">Select what you want to Do</h3>
		<div style="padding-bottom: 13px;" class="w3agile banner-bottom">
			     <ul>
				    <li><a href="MyProfile.php" class="hvr-radial-out"><i class="fa fa-user" aria-hidden="true"></i></a><h6>Profile</h6></li><br>
					<li><a href="tripsData.php" class="hvr-radial-out"><i class="fa fa-bus" aria-hidden="true"></i></a><h6>Travel details</h6></li><br>
					<li><a href="Payments.php" class="hvr-radial-out"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a><h6>payment</h6></li>
					
				</ul>
			</div>
	<!-- //banner -->
	<!--bus --> 

	<!-- //contact-->
		<!--/footer-->
		 <?php include("footer.php");	  ?>
		<!--/footer-->
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