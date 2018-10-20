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
				<h4>Site Content</h4>
			</div>
			
			<div class="row">
				<div class="col-md-10 col-md-push-1 text-center">
					<form action="process-forms.php" method="post" enctype="multipart/form-data">
						<table border="1" class="content-table">
							<tr><th>Context<th>Content</tr>
							
							<?php 
								$result = mysqli_query($conn,"SELECT * FROM content");
								
								while($row = mysqli_fetch_array($result)) 
								{
									$id = $row['id'];
									$context = $row['identifier'];
									$content = $row['content_text'];
									
									echo "<tr><td>" . $context;
									echo "<td><textarea name='content[]'>" . $content . '</textarea>';

									echo "<input type='hidden' name='content_id[]' value='".$id."'>";
								}
							?>	
							
						</table>

						<div style="text-align: center; margin-top: 15px;">
							<input type="submit" class="btn btn-primary" value="Save" name="change-content">
						</div>
					</form>
				</div>
			</div>
	
			<div class="row">
				<div class="col-md-10 col-md-push-1 text-center">
					<h4>Press Entries</h4>
					<form action="process-forms.php" method="post" enctype="multipart/form-data">
						<table border="1" class="content-table">
							<tr><th>Name<th>Link<th>Image<th>Delete?</tr>
							
							<?php 
								$result = mysqli_query($conn,"SELECT * FROM press");
								
								while($row = mysqli_fetch_array($result)) 
								{
									$id = $row['id'];
									$name = $row['name'];
									$link = $row['link'];
									$img_path = $row['img_path'];
									
									echo "<tr><td>" . $name;
									echo "<td>" . $link;
									echo "<td>" . $img_path;
									echo "<td><input type='checkbox' name='which_delete[]' value='".$id."'>";
									//echo "<input type='hidden' name='press_id[]' value='".$id."'>";
								}
							?>	
							
						</table>

						<div style="text-align: center; margin-top: 15px;">
							<a href="add-press.php" class="btn btn-primary"><span style="color:white">Add New</span></a>
							<input type="submit" class="btn btn-primary" value="Save" name="change-press">
						</div>
					</form>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-10 col-md-push-1 text-center">
					<h4>Fundraiser Entries</h4>
					<form action="process-forms.php" method="post" enctype="multipart/form-data">
						<table border="1" class="content-table">
							<tr><th>Name<th>Link<th>Image<th>Delete?</tr>
							
							<?php 
								$result = mysqli_query($conn,"SELECT * FROM fundraisers");
								
								while($row = mysqli_fetch_array($result)) 
								{
									$id = $row['id'];
									$name = $row['name'];
									$link = $row['link'];
									$img_path = $row['img_path'];
									
									echo "<tr><td>" . $name;
									echo "<td>" . $link;
									echo "<td>" . $img_path;
									echo "<td><input type='checkbox' name='which_delete[]' value='".$id."'>";
									//echo "<input type='hidden' name='fundraiser_id[]' value='".$id."'>";
								}
							?>	
							
						</table>

						<div style="text-align: center; margin-top: 15px;">
							<a href="add-fundraiser.php" class="btn btn-primary"><span style="color:white">Add New</span></a>
							<input type="submit" class="btn btn-primary" value="Save" name="change-fundraisers">
						</div>
					</form>
				</div>
			</div>
		</div>
		<br/><br/>
	</body>
</html>