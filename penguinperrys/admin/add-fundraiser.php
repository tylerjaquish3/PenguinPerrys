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
				<h4>New Fundraiser</h4>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-3 col-xs-12 real-order-form">
						<form action="process-forms.php" method="post" class="admin-form" enctype="multipart/form-data">
							Name: <br />
							<input type="text" name="name" required placeholder=""><br />
							<br />Link: <br />
							<input type="text" name="link" placeholder=""><br />
							<br />Select image(s):
							<input type="file" name="image" id="fileToUpload"><br />
							<br />Description: <br/>
							<textarea name="description" required></textarea><br />
							
							<br /><br />
							<input type="submit" name="submit-new-fundraiser" class="btn btn-primary" value="Submit">
						
						</form>
					</div>
				</div>
			</div>	
		</div>
		<br/><br/>
	</body>
</html>