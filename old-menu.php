<?PHP
$currentPage = 'Menu';
include 'header.php';
include 'datalogin.php';
?>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row6=================================-->
	<div class="row_6">
       <div class="container">
			<!--<h2 class="pad_bot3">Menu</h2>-->
			<div class="row" id="desktop-menu">
        		<div class="col-sm-12">
					<div class="row menu-row">
						<div class="col-sm-4 move-div">
							<div class="row menu-move">
								First Move 
							</div>
							<div class="col-xs-12 move-desc">
								Pick one of our delicious cookies<br /> or brownies baked on-site
							</div>
							<img src="img/arrow1.png" id="arrow1">
						</div>
						<div class="col-sm-4">
							<span class="page-title">Menu</span>
						</div>
						<div class="col-sm-4">
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
					<div class="row menu-row">
						<div class="col-sm-4">
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
						<div class="col-sm-4">
							<div class="row move-div">
								<div class="menu-move">
									Second Move
								</div>
								<div class="col-xs-12 move-desc">
									Add one of our tasty ice cream flavors 
								</div>
							</div>
							<img src="img/arrow3.png" id="arrow3">
						</div>
						<div class="col-sm-4" id="third-move">
							<img src="img/arrow2.png" id="arrow2">
							<div class="row move-div" id="third-move-content">
								<div class="menu-move">
									Third Move 
								</div>
								
								<div classs="col-xs-12 move-desc">
									Pick another one of our handmade cookies<br /> or brownies
								</div>
								
							</div>
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
						<div class="col-sm-4 move-div">
							<div class="row menu-move">
								Fourth Move
							</div>
							<div class="col-xs-12 move-desc">
								Pick a topping to smother or cover<br /> your delicious creation
							</div>
							<img src="img/arrow4.png" id="arrow4">
						</div>
						<div class="col-sm-4">
						
						</div>
					</div>
					-->
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