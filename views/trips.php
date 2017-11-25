

	<div id="portfolio" class="portfolio w3agile">
		<div class="container">
			
			<div>

				<div class="row" >
					<div class="col-xs-4">

						<h3><?php echo $date; ?></h3>

					</div>
					<div class="col-xs-5">
						<h5>Start Location</h5>
						<p1><strong><?php echo $currentlocation ?></strong></p1><br>

						<h5>Destination</h5>
						<p1><strong><?php echo $destination; ?></strong></p1>

						<h5>Distance</h5>
						<p1><strong><?php echo $distance; ?>Km</strong></p1><br>

						<h5>Cost</h5>
						<p1><strong>Rs:<?php echo $cost; ?></strong></p1>

					</div>
					<div class="col-xs-3">
						<a href="TripRecipt.php?id='<?php echo $tripid; ?>'">Recipt</a>
					</div>
					<hr style="color:red;">
				</div>
			</div>
		</div>  
	</div>    

