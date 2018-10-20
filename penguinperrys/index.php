<?PHP
$currentPage = 'Home';
include 'header.php';
?>

<!--==============================content=================================-->
<div id="content">

    <!--==============================slider=================================-->
    <div class="slider">
        <div class="camera_wrap">
          <div data-src="img/foodtruck2.jpg"></div>
          <div data-src="img/sandwiches2.jpg"></div>
          <!--<div data-src="img/header3.jpg"></div>-->
        </div>
    </div>
    <!--==============================row1=================================-->
	<div class="row_1">
		<div class="container">
			<div class="penguin2" id="desktop-show"><img src="img/Penguins-03.png"></div>
			<p class="title1">What do Penguins sing at birthday parties?</p><p class="title1"><i>Freeze a jolly good fellow!</i></p>
			<p class="title2">Here at Penguin Perry's we love to laugh, have a great time with an uplifting atmosphere while making sure we cure everyone's sweet tooth! Feel free to be as unique and creative as you want with all of our different types of fresh baked cookies, ice cream & toppings!</p>
			<a href="about.php" class="btn btn-default btn-lg btn1">more</a>
        </div>
    </div>
    <!--==============================row2=================================-->
    <div class="row_4">
		<!-- LightWidget WIDGET -->
		<script src="//lightwidget.com/widgets/lightwidget.js"></script>
		<iframe src="//lightwidget.com/widgets/bec40b2ceb7b522c811ac499ebe93920.html" id="lightwidget_bec40b2ceb" name="lightwidget_bec40b2ceb"  scrolling="no" class="lightwidget-widget"></iframe>
	
		<!--<a class="twitter-timeline" href="https://twitter.com/PenguinPerrys" data-widget-id="724086417584873472">Tweets by @PenguinPerrys</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		-->
	</div>
	
    <!--==============================row3=================================-->
	<!--<div class="horizontal-arrows"></div>-->
    <div class="row_3">
       <div class="container">

			<div class="row">
				<span class="text-center"><h2>Locations</h2></span>
				<div class="penguin3" id="desktop-show"><img src="img/Penguins-02.png"></div>
				<ul class="list3">
					<?PHP
					include 'datalogin.php';
					
					$result = mysqli_query($conn,"SELECT * FROM locations WHERE is_active = 1");	
					$num = mysqli_num_rows($result);
					if($num > 0) {
						while($row = mysqli_fetch_array($result)) 
						{
							$address = $row['address'];
							$zip = $row['zip'];
							$address_url = str_replace(" ", "%20", $address);
							$days_times = $row['days_times'];
							$description = $row['description'];
							
							//var_dump($address_url);
							?>
							
							<li class="col-sm-6 col-xs-12">
								<div class="box4">
									<div class="col-sm-6 col-xs-12">
										<?PHP
										echo '<iframe src="https://www.google.com/maps/embed/v1/place?q=' . $address_url . '%20' . $zip .
											'&zoom=12
											&key=AIzaSyBCLxUHO7IFIdef_Ci0a-DltfRLwvPAb-4">
										</iframe>';
										?>
									</div>
									<div class="col-sm-6 col-xs-12 info1 maxheight">
										<!--<p class="list3title1">Main Street, Dallas</p>-->
										<p class="list3title2"><?PHP echo $days_times; ?></p>
										<p class="list3title3"><?PHP echo $description; ?></p>
									</div>
								</div>
							</li>
							<?PHP
						}
					} else {
						?>
						<li class="col-xs-12">
							<div class="box4">
								<div class="col-sm-6 col-xs-12">
									<?PHP
									echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5892567.374910679!2d-102.41300876727054!3d30.9531038143916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas!5e0!3m2!1sen!2sus!4v1461506586064" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
									?>
								</div>
								<div class="col-sm-6 col-xs-12 info1 maxheight">
									<p class="list3title1">Coming soon!</p>
									
								</div>
							</div>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
    </div>
</div>

<script type="text/javascript">
	function initMap() {
		// Create a map object and specify the DOM element for display.
		var map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -34.397, lng: 150.644},
			scrollwheel: false,
			zoom: 8
			});
		}
</script>


<?PHP 
include 'footer.html';
?>