<?php
session_start();
//print_r($_SESSION);
//echo "session userid: " . $_SESSION["user_id"];

if(!isset($_SESSION["username"]) )
{
    header('location:index.html');
}
else
{
	echo "<span style='color: #000;'>You are logged in as: " . $_SESSION["username"] . "</span>";// . ": " . $_SESSION["user_id"];
}

include '../datalogin.php';
//include '../functions.php';
include 'admin-header.html';
?>
			
		<div class="admin-container">
			<div class="heading text-center"> 
				<h3>Admin Area</h3>
				<h4>Active Locations</h4>
			</div>
			
			<div class="row">
				<div class="col-md-10 col-md-push-1 text-center">
					<form action="process-forms.php" method="post" enctype="multipart/form-data">
						<table border="1" class="inventory-table">
							<tr><th>Address<th>Zip Code<th>Description<th>Days & Times<th>Active?</tr>
							<?php 
				
								$result = mysqli_query($conn,"SELECT * FROM locations WHERE is_active = 1");
								
								while($row = mysqli_fetch_array($result)) 
								{
									$id = $row['id'];
									$active = $row['is_active'];
									
									echo "<tr><td>" . $row['address'] .
									"<td>" . $row['zip'] . 
									"<td>" . $row['description'] .
									"<td>" . $row['days_times'];
									
									if($active == 0){
										$active2 = "selected";
										$active1 = "";
									} else{
										$active1 = "selected";
										$active2 = "";
									}
									echo "<td><select name='is-active[]'><option value='1' $active1>Active</option><option value='0' $active2>Not Active</option></select>";
									echo '<input type="hidden" name="location-id[]" value="'. $id .'">';
								}
							?>	
						</table>
						<div style="text-align: center; margin-top: 15px;">
							<a href="add-location.php" class="btn btn-primary"><span style="color:white">Add New</span></a>
							<input type="submit" class="btn btn-primary" value="Save Changes" name="change-active-locations">
						</div>
					</form>
				</div>
				
			</div>	
		
		<br/><br/>
		
		
			<div class="heading text-center"> 
				<h4>Inactive Locations</h4>
			</div>
			
			<div class="row">
				<div class="col-md-10 col-md-push-1 text-center">
					<form action="process-forms.php" method="post" enctype="multipart/form-data">
						<table border="1" class="inventory-table">
							<tr><th>Address<th>Zip Code<th>Description<th>Days & Times<th>Active?</tr>
							<?php 
				
								$result = mysqli_query($conn,"SELECT * FROM locations WHERE is_active = 0");
								
								while($row = mysqli_fetch_array($result)) 
								{
									$id = $row['id'];
									$active = $row['is_active'];
									
									echo "<tr><td>" . $row['address'] .
									"<td>" . $row['zip'] . 
									"<td>" . $row['description'] .
									"<td>" . $row['days_times'];
									
									if($active == 0){
										$active2 = "selected";
										$active1 = "";
									} else{
										$active1 = "selected";
										$active2 = "";
									}
									echo "<td><select name='is-active[]'><option value='1' $active1>Active</option><option value='0' $active2>Not Active</option></select>";
									echo '<input type="hidden" name="location-id[]" value="'. $id .'">';
								}
							?>	
						</table>
						<div style="text-align: center; margin-top: 15px;">
							<input type="submit" class="btn btn-primary" value="Save Changes" name="change-active-locations">
						</div>
					</form>
				</div>
				
			</div>	
			
		</div>
		
		
		
		
	</body>
</html>