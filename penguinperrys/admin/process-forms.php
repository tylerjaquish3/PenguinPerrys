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
include '../functions.php';
include 'admin-header.html'; 
?>
			
		<div class="admin-container">
			<div class="heading text-center"> 
				<h2>Confirmation</h2>
			</div>
			
			<?php
			$inventory_update = false;
			
			if(isset($_POST['change-active-menu'])) {
				//var_dump($_POST);
				for($i = 0; $i < count($_POST['menu-id']); $i++)
				{
					$menu_item_id = $_POST['menu-id'][$i];
					$is_active = $_POST['is-active'][$i];
					if(isset($_POST['item_name']) && isset($_POST['category'])) {
					$item_name = escape($_POST['item_name'][$i]);
						$category = $_POST['category'][$i];
						$sql = "UPDATE menu SET is_active = $is_active, item_name = '$item_name', category = $category WHERE id = $menu_item_id";
					} else {
						$sql = "UPDATE menu SET is_active = $is_active WHERE id = $menu_item_id";
					}
					
					//var_dump($sql);
					mysqli_query($conn, $sql);
					
				}

				echo '<p>Your active/inactive menu item(s) has been updated.';
			}
			
			if(isset($_POST['change-active-locations'])) {
				//var_dump($_POST);
				for($i = 0; $i < count($_POST['location-id']); $i++)
				{
					$location_id = $_POST['location-id'][$i];
					$is_active = $_POST['is-active'][$i];
					
					$sql = "UPDATE locations SET is_active = $is_active WHERE id = $location_id";
					mysqli_query($conn, $sql);
					
				}
				echo '<p>Your active/inactive location(s) has been updated.';
			}
			
			if(isset($_POST['change-press'])) {
				//var_dump($_POST);
				for($i = 0; $i < count($_POST['which_delete']); $i++)
				{
					$which_delete = $_POST['which_delete'][$i];
					//var_dump($which_delete);
					
					$sql = "DELETE FROM press WHERE id = $which_delete";
					//echo $sql;
					mysqli_query($conn, $sql);
					
				}
				echo '<p>Your press item(s) has been updated.';
			}
			
			if(isset($_POST['change-fundraisers'])) {
				//var_dump($_POST);
				for($i = 0; $i < count($_POST['which_delete']); $i++)
				{
					$which_delete = $_POST['which_delete'][$i];
					//var_dump($which_delete);
					
					$sql = "DELETE FROM fundraisers WHERE id = $which_delete";
					//echo $sql;
					mysqli_query($conn, $sql);
					
				}
				echo '<p>Your fundraiser item(s) has been updated.';
			}
			
			if(isset($_POST['submit-new-menu-item'])){

				if(isset($_POST['item_name']))
					$item_name = escape($_POST['item_name']);
				if(isset($_POST['category']))
					$category = $_POST['category'];
				if(isset($_POST['description']))
					$description = escape($_POST['description']);
				
				
				//$created_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO menu (item_name, category, description, is_active) VALUES ('$item_name', '$category', '$description', 1)";
				//var_dump($sql);
				if(mysqli_query($conn, $sql)){
					echo '<p>Your new menu item has been added.';
				}
				else{
					echo '<p>Error: ' . $sql . '<br .>' . mysqli_error($conn);
				}
				$inventory_update = true;
			}
			
			if(isset($_POST['submit-new-location'])){

				if(isset($_POST['address']))
					$address = escape($_POST['address']);
				if(isset($_POST['city']))
					$address .= ", " . escape($_POST['city']);
				if(isset($_POST['zip']))
					$zip = escape($_POST['zip']);
				if(isset($_POST['days_times']))
					$days_times = escape($_POST['days_times']);
				if(isset($_POST['description']))
					$description = escape($_POST['description']);

				//$created_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO locations (address, zip, days_times, description, is_active) VALUES ('$address', '$zip', '$days_times', '$description', 1)";
				//var_dump($sql);
				if(mysqli_query($conn, $sql)){
					echo '<p>Your new location has been added.';
				}
				else{
					echo '<p>Error: ' . $sql . '<br .>' . mysqli_error($conn);
				}
				$inventory_update = true;
			}
			
			if(isset($_POST['submit-new-press'])){
				$target_prefix = "../";
				$target_dir = "img/uploaded/";
				//$target_file = $target_prefix . $target_dir . basename($_FILES["fileToUpload"]["name"]);
				
				if($_FILES['image']['name'] != '') {
					$temp = explode(".", $_FILES['image']["name"]); 
					$newFileName = round(microtime(true)) . rand(1,100) . '.' . end($temp);
					$target_file = $target_prefix . $target_dir . $newFileName;

					$return = uploadInventory($target_file, $_FILES['image']);
					echo $return;
						
					$fileName = $target_dir . $newFileName;
				}
				
				if(isset($_POST['name']))
					$name = escape($_POST['name']);
				if(isset($_POST['link']))
					$link = escape($_POST['link']);
				if(isset($_POST['description']))
					$description = escape($_POST['description']);

				//$created_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO press (name, link, img_path, description) VALUES ('$name', '$link', '$newFileName', '$description')";
				//var_dump($sql);
				if(mysqli_query($conn, $sql)){
					echo '<p>Your new press item has been added.';
				}
				else{
					echo '<p>Error: ' . $sql . '<br .>' . mysqli_error($conn);
				}
				$inventory_update = true;
			}
			
			if(isset($_POST['submit-new-fundraiser'])){
				$target_prefix = "../";
				$target_dir = "img/uploaded/";
				//$target_file = $target_prefix . $target_dir . basename($_FILES["fileToUpload"]["name"]);
				
				if($_FILES['image']['name'] != '') {
					$temp = explode(".", $_FILES['image']["name"]); 
					$newFileName = round(microtime(true)) . rand(1,100) . '.' . end($temp);
					$target_file = $target_prefix . $target_dir . $newFileName;

					$return = uploadInventory($target_file, $_FILES['image']);
					echo $return;
						
					$fileName = $target_dir . $newFileName;
				}
				
				if(isset($_POST['name']))
					$name = escape($_POST['name']);
				if(isset($_POST['link']))
					$link = escape($_POST['link']);
				if(isset($_POST['image']))
					$image = escape($_POST['image']);
				if(isset($_POST['description']))
					$description = escape($_POST['description']);

				//$created_at = date("Y-m-d H:i:s");

				$sql = "INSERT INTO fundraisers (name, link, img_path, description) VALUES ('$name', '$link', '$newFileName', '$description')";
				//var_dump($sql);
				if(mysqli_query($conn, $sql)){
					echo '<p>Your new fundraiser item has been added.';
				}
				else{
					echo '<p>Error: ' . $sql . '<br .>' . mysqli_error($conn);
				}
				$inventory_update = true;
			}
			
			if(isset($_POST['edit-inventory'])){
				
				if(isset($_POST['id']))
					$item_id = $_POST['id'];
				
				if(isset($_POST['item_name']))
					$item_name = escape($_POST['item_name']);
				if(isset($_POST['description']))
					$description = escape($_POST['description']);

				//var_dump($inventory_id);
				$sql = "UPDATE menu SET item_name = '$item_name', description = '$description'";
				
				//var_dump($sql);
				if(mysqli_query($conn, $sql)){
					echo '<p>Your new menu item has been updated.';
				}
				else{
					echo '<p>Error: ' . $sql . '<br .>' . mysqli_error($conn);
				}
				
				$inventory_update = true;
			}
			
			if(isset($_POST['change-content'])) {
				$content = $_POST['content'];
				$content_id = $_POST['content_id'];
				
				for($i = 0; $i < sizeof($content); $i++) {
			
					$new_content = mysqli_real_escape_string($conn, $content[$i]);
	
					$sql = "UPDATE content SET content_text = '$new_content' WHERE id = $content_id[$i]";
					mysqli_query($conn, $sql);
				}
				echo '<p>Your content has been updated.';
			}
			?>
			
		</div>
		<br/><br/>
	</body>
</html>