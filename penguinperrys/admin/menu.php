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
				<h4>Active Menu</h4>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-push-2 col-xs-12 text-center">
					<form action="process-forms.php" method="post" enctype="multipart/form-data">
						<table border="1" class="inventory-table">
							<tr><th>Item<th>Category<th>Active?</tr>
							<?php 
				
								$result = mysqli_query($conn,"SELECT * FROM menu WHERE is_active = 1");
								
								while($row = mysqli_fetch_array($result)) 
								{
									$id = $row['id'];
									$active = $row['is_active'];
									$category = $row['category'];
									
									echo "<tr><td><input type='text' name='item_name[]' required value='" . $row['item_name'] . "'>";
									
									$category1 = $category2 = $category3 = '';
									if($category == 1){
										$category1 = "selected";
									} else if($category == 2) {
										$category2 = "selected";
									} else {
										$category3 = "selected";
									}
									
									echo "<td><select name='category[]'>";
									echo "<option value='1' $category1>Cookie</option><option value='2' $category2>Ice Cream</option><option value='3' $category3>Topping</option>";
									echo "</select>";
									
									$active1 = $active2 = "";
									if($active == 0){
										$active2 = "selected";
									} else{
										$active1 = "selected";
									}
									echo "<td><select name='is-active[]'><option value='1' $active1>Active</option><option value='0' $active2>Not Active</option></select>";
									echo '<input type="hidden" name="menu-id[]" value="'. $id .'">';
								}
							?>	
						</table>
						<div style="text-align: center; margin-top: 15px;">
							<a href="add-menu-item.php" class="btn btn-primary"><span style="color:white">Add New</span></a>
							<input type="submit" class="btn btn-primary" value="Save Changes" name="change-active-menu">
						</div>
					</form>
				</div>
				
			</div>	
		
		<br/><br/>
		
		
			<div class="heading text-center"> 
				<h4>Inactive Menu</h4>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-push-2 col-xs-12 text-center">
					<form action="process-forms.php" method="post" enctype="multipart/form-data">
						<table border="1" class="inventory-table">
							<tr><th>Item<th>Category<th>Active?</tr>
							<?php 
				
								$result = mysqli_query($conn,"SELECT * FROM menu WHERE is_active = 0");
								
								while($row = mysqli_fetch_array($result)) 
								{
									$id = $row['id'];
									$active = $row['is_active'];
									
									echo "<tr><td>" . $row['item_name'] . "<td>";
									switch($row['category']) {
										case 1:
											echo "Cookie";
											break;
										case 2: 
											echo "Ice Cream";
											break;
										case 3:
											echo "Topping";
											break;
									}
									
									if($active == 0){
										$active2 = "selected";
										$active1 = "";
									} else{
										$active1 = "selected";
										$active2 = "";
									}
									echo "<td><select name='is-active[]'><option value='1' $active1>Active</option><option value='0' $active2>Not Active</option></select>";
									echo '<input type="hidden" name="menu-id[]" value="'. $id .'">';
								}
							?>	
						</table>
						<div style="text-align: center; margin-top: 15px;">
							<input type="submit" class="btn btn-primary" value="Save Changes" name="change-active-menu">
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>