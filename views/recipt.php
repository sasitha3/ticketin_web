

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
					<a href="AfterLogin.php"><i style="font-size: 30px;" class="fa fa-home"></i></a>
				</div>
		   	  <div class="Profile-mid">
					<h5 class="pro-link"><a href="main.html">Travel Hunt</a></h5>
				</div>
				<div class="Profile-right">
										<a style="color: white;" href="MyProfile.php" > <i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['customeruname']; ?></a> 

					
				</div>
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   <div class="details-grid tr">
				<div class="details-shade ">
						<div class="details-right">
							<img src="images/logo.png" alt=" ">

							<h3>Hey <?php
							 $username=$_SESSION['customeruname'];
							 echo  $username; ?></h3>
							<h4>Genarate your recipt as Email.</h4>
								
							
						</div>


				
				</div>
			</div>

	<!-- //banner -->
	<!--bus --> 
            <div class="w3agile contact">
			       <h3 class="w3ls-title2">Get Your Recipt As Email</h3>
			       <div class="book-a-ticket">
							<div class=" bann-info">
								<form action="TripRecipt.php?id=<?php echo $recid; ?>" method="post">
									<div class="ban-top">
										<div class="bnr-left">
											<label class="inputLabel">Start Location</label>
											<input readonly class="city" type="text" value="<?php echo $currentlocationval; ?>" >
										</div>
										
										<div class="bnr-left">
											<label class="inputLabel">Destination</label>
											<input class="city" type="text" value="<?php echo $destinationval; ?>" readonly>
										</div>
											<div class="clearfix"></div>
									</div>
									 <div class="ban-bottom">
											<div class="bnr-right">
												<label class="inputLabel">Cost</label>
												<input class="city" type="text" value="RS: <?php echo $cost; ?>" >
											</div>
											<div class="bnr-right">
												<label class="inputLabel">Date</label>
												<input class="city" id="datepicker1" type="text" value="<?php echo $date; ?>" readonly>
											</div>

											<!---/End-date-piker---->
										</div>

										<div class="ban-bottom">
<!-- 											<div class="bnr-right">
												<label class="inputLabel">Pay Methode</label>
												<input class="city" type="text" value="RS: 20" >
											</div> -->
											<div class="bnr-right">
												<label class="inputLabel">Distance</label>
												<input class="city" id="datepicker1" type="text" value="Km <?php echo $dis; ?>" readonly>
											</div>

											<!---/End-date-piker---->
										</div><br>
									<div style="margin-top: 43%; margin-left: 34%;">
									     <button type="submit" name="emailsub" class="btn btn-success">Get Recipt</button> 
									
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