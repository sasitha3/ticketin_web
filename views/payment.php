
<!DOCTYPE html>

<html lang="en">

<?php

 include("head.php"); ?>



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
					<a href="AfterLogin.php" ><i style="font-size: 30px;" class="fa fa-home"></i></a>
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
   <div class="details-grid pay">
				<div class="details-shade ">
						<div class="details-right">
							<img src="images/logo.png" alt=" ">
							<h3>Hi <?php $uname=$_SESSION['customeruname'];echo $uname; ?></h3>
							<h4>Pay Your Bills.</h4>
								
							
						</div>


				
				</div>
			</div>

	<!-- //banner -->
	<!--payment--> 
	<form action="Payments.php" method="post">
            <div class="w3agile single-bus">
			    <div class="payment-left">
				<div class="confirm-details">
					<h3>Your payment Details</h3><br>
					<label>Name</label>
					<input style="border-top-color: wheat;color: #232020;" type="text" readonly value="<?php echo $fname;echo " "; echo $lname; ?>" >
					<label>Smart Card ID</label>
					<input style="border-top-color: wheat;color: #232020;"   type="text" readonly value="<?php echo $sid;  ?>" >
					<label>Emai</label>
					<input style="border-top-color: wheat;color: #232020;"  type="text" readonly value="<?php echo $email; ?>" >
					<label>Phone</label>
					<input style="border-top-color: wheat;color: #232020;"  type="text" readonly value="<?php echo $phone; ?>" >
				<label>Enter Your Amount(Rs:)</label>
				<input  style="color: black;" type="number" required placeholder="Amount" name="value" value="" >

				<div class="payment-options">

					<h3>Card Details</h3><br>
					<div >
                        <div class="col-md-6">
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-number">
                                        <label>Card Number</label>
                                        <input required class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text" pattern="\d*" maxlength="16" ><span class="cc-card-icon"></span>
                                    </div>
                                    <div class="form-group form-group-cc-cvc">
                                        <label>CVV</label>
                                        <input required class="form-control" placeholder="xxxx" type="text" pattern="\d*" maxlength="4" minlength="4">
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="form-group form-group-cc-name">
                                        <label>Card Holder Name</label>
                                        <input required class="form-control" type="text">
                                    </div>
                                    <div class="form-group form-group-cc-date">
                                        <label>Valid Thru</label>
                                        <input required class="form-control" placeholder="mm/yy"  type="month"  required

>
                                    </div>
                                </div>
 								 <br>
                                <button  class="btn btn-primary"  name="paysubmit" type="submit" >Proceed Payment</button> 
                            </form>
                        </div>
                    </div>
						</div>
							</div>			
					<div class="clearfix"> </div>
				</div>

				<?php include('footer.php'); ?>
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