<?PHP
$currentPage = 'Press';
include 'header.php';
include 'datalogin.php';
?>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row7=================================-->
    <div class="row_7">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="pad_bot2">Penguin Perry's in the Press</h2>
					
						<?PHP 
						$count = 0;
						
						$result = mysqli_query($conn,"SELECT * FROM press");		
						while($row = mysqli_fetch_array($result)) 
						{
							$name = $row['name'];
							$link = $row['link'];
							$image = $row['img_path'];
							$description = $row['description'];
							$count++;
							
							
							if($count % 3 == 0) {
								echo '<div class="row links">';
							}
								
							?>
							
							<div class="col-sm-4 col-xs-12 press">
								<div class="parent">
									<h3><a class="btn-link4" href="<?PHP echo $link; ?>"><img src="img/uploaded/<?PHP echo $image; ?>"></a></h3>
								</div>
								<div>
									<h3><?PHP echo $name; ?></h3>
									<p><?PHP echo $description; ?></p>
								</div>
							</div>
							
							<?PHP
							if($count % 3 == 0) {
								echo '</div>';
							}
							
						}
						
						?>
						
					
				</div>
			</div>
		</div>
    </div>
</div>

<?PHP 
include 'footer.html';
?>