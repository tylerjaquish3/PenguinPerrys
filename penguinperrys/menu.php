<?PHP
$currentPage = 'Menu';
include 'header.php';
include 'datalogin.php';
?>

<script>
	$(function ()
	{
		$("#wizard").steps({
			headerTag: "h2",
			bodyTag: "section",
			transitionEffect: "slideLeft"
		});
	});
</script>

<!--==============================content=================================-->
<div id="content">
    <!--==============================row6=================================-->
	<div class="row_6">
       <div class="container">
			<!--<h2 class="pad_bot3">Menu</h2>-->
			<div class="row" id="desktop-menu">
        		<div class="col-sm-12">
					<div class="row menu-row">
					
						<div class="col-xs-12">
							<span class="page-title">Menu</span>
						</div>
						
					</div>
					<div class="row menu-row">
	
						<div id="wizard">
							<h2>Step 1</h2>
							<section>
								<h2>First, pick one of our delicious cookies or brownies (baked on-site) as the foundation for your creation!</h2>
								
								<div class="row">
									<?php
										$count = $newCol = 0;
										$result = mysqli_query($conn,"SELECT * FROM menu WHERE category=1 AND is_active = 1 LIMIT 30");	
										$num = mysqli_num_rows($result);	
										if($num > 15) {
											echo '<div class="col-sm-4">
												<img src="img/step1.png" width="80%">
											</div>
											<div class="col-sm-4 menu-list">';										
											while($row = mysqli_fetch_array($result)) 
											{
												$count++;
												echo $row['item_name'] . '<br>';
												
												if($count > 14 && $newCol == 0) {
													echo '</div><div class="col-sm-4 menu-list">';
													$newCol = 1;
												}
											}
											echo '</div>';
										} else {
											echo '<div class="col-sm-6">
												<img src="img/step1.png" width="80%">
											</div>
											<div class="col-sm-6 menu-list">';
											while($row = mysqli_fetch_array($result)) 
											{	
												echo $row['item_name'] . '<br>';
											}
											echo '</div>';
										}
									?>
									
								</div>
							</section>

							<h2>Step 2</h2>
							<section>
								<h2>Next, add a giant scoop of one of our tasty ice cream flavors!</h2>
								<div class="row">
									<?php
										$count = $newCol = 0;
										$result = mysqli_query($conn,"SELECT * FROM menu WHERE category=2 AND is_active = 1 LIMIT 30");	
										$num = mysqli_num_rows($result);	
										if($num > 15) {
											echo '<div class="col-sm-4">
												<img src="img/step2.png" width="80%">
											</div>
											<div class="col-sm-4 menu-list">';										
											while($row = mysqli_fetch_array($result)) 
											{
												$count++;
												echo $row['item_name'] . '<br>';
												
												if($count > 14 && $newCol == 0) {
													echo '</div><div class="col-sm-4 menu-list">';
													$newCol = 1;
												}
											}
											echo '</div>';
										} else {
											echo '<div class="col-sm-6">
												<img src="img/step2.png" width="80%">
											</div>
											<div class="col-sm-6 menu-list">';
											while($row = mysqli_fetch_array($result)) 
											{	
												echo $row['item_name'] . '<br>';
											}
											echo '</div>';
										}
									?>
									
								</div>
							</section>

							<h2>Step 3</h2>
							<section>
								<h2>Finally, top it off with another one of our handmade cookies or brownies!</h2>
								<div class="row">
									<?php
										$count = $newCol = 0;
										$result = mysqli_query($conn,"SELECT * FROM menu WHERE category=1 AND is_active = 1 LIMIT 30");	
										$num = mysqli_num_rows($result);	
										if($num > 15) {
											echo '<div class="col-sm-4">
												<img src="img/step3.png" width="80%">
											</div>
											<div class="col-sm-4 menu-list">';										
											while($row = mysqli_fetch_array($result)) 
											{
												$count++;
												echo $row['item_name'] . '<br>';
												
												if($count > 14 && $newCol == 0) {
													echo '</div><div class="col-sm-4 menu-list">';
													$newCol = 1;
												}
											}
											echo '</div>';
										} else {
											echo '<div class="col-sm-6">
												<img src="img/step3.png" width="80%">
											</div>
											<div class="col-sm-6 menu-list">';
											while($row = mysqli_fetch_array($result)) 
											{	
												echo $row['item_name'] . '<br>';
											}
											echo '</div>';
										}
									?>
									
								</div>
							</section>

							<h2>Complete!</h2>
							<section>
								<h2>That's it! <br />Now track down our truck to enjoy your gourmet ice cream sandwich from Penguin Perry's!</h2>
								
							</section>
						</div>
					</div>
				</div>
           </div>
		   
			<div id="mobile-menu">
        		<div class="text-center">
					<span class="page-title">Menu</span>
				</div>	
				<div class="row menu-row">
					<div class="col-xs-12 move-div">
						<div class="row menu-move">
							First Move 
						</div>
						<div class="col-xs-12 move-desc">
							Pick one of our delicious cookies or brownies baked on-site
						</div>
					</div>
				</div>
				<div class="text-center">
					<img src="img/arrow2.png" class="down-arrow">
				</div>
				<div class="row menu-row">
					<div class="col-xs-12">
						<div class="row move-div">
							<div class="menu-move">
								Second Move
							</div>
							<div class="col-xs-12 move-desc">
								Add one of our tasty ice cream flavors 
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<img src="img/arrow2.png" class="down-arrow">
				</div>
				<div class="row menu-row">
					<div class="col-xs-12">
						<div class="row move-div">
							<div class="menu-move">
								Third Move 
							</div>
							
							<div class="col-xs-12 move-desc">
								Pick another one of our handmade cookies or brownies
							</div>
							
						</div>
					</div>
				</div>
					<!--
					<div class="col-sm-4 move-div">
						<div class="row menu-move">
							Fourth Move
						</div>
						<div class="col-xs-12 move-desc">
							Pick a topping to smother or cover<br /> your delicious creation
						</div>
					</div>
					-->
					
				<div class="row menu-row">
					<div class="col-xs-12">
						<span class="menu-category">Cookies</span><br />
						<?php
						$result = mysqli_query($conn,"SELECT * FROM menu WHERE category=1 AND is_active = 1");		
						while($row = mysqli_fetch_array($result)) 
						{
							$item_name = $row['item_name'];
							$description = $row['description'];
							echo $item_name . '<br>';
						}
						?>
					</div>
					
				</div>
				<div class="row menu-row">
					<div class="col-xs-12">
						<span class="menu-category">Ice Cream Flavors</span><br />
						<?php
						$result = mysqli_query($conn,"SELECT * FROM menu WHERE category=2 AND is_active = 1");		
						while($row = mysqli_fetch_array($result)) 
						{
							$item_name = $row['item_name'];
							$description = $row['description'];
							echo $item_name . '<br>';
						}
						?>
						<!--<div class="blue-bell">
							Proudly Serving <br />
							<img src="img/bluebell1.jpg" width="80%"><br />
						</div>-->
					</div>
				</div>
				
				<!--
				<div class="row menu-row">
					<div class="col-sm-4">
						<span class="menu-category">Toppings</span><br />
						<?php
						/*$result = mysqli_query($conn,"SELECT * FROM menu WHERE category=3 AND is_active = 1");		
						while($row = mysqli_fetch_array($result)) 
						{
							$item_name = $row['item_name'];
							$description = $row['description'];
							echo $item_name . '<br>';	
						}*/
						?>
					</div>
					
				</div>
				-->
				
           </div>
			<div class="row menu-row">
				<div class="col-xs-12">
					*Note: Not every option will be available at events but these are some of the flavors you can look forward to!
				</div>
			</div>
       </div>
	</div>
</div>


<?PHP 
include 'footer.html';
?>