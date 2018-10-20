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
			
		<div class="container admin-container">
			<div class="row">
				<div class="col-xs-12 heading text-center"> 
					<h3>Admin Area</h3>
					<h4>Customers</h4>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-6 col-xs-push-3">
					<table border="1" class="sales-table">
						<tr><th>Name<th>Email<th>Phone</tr>
						<?php 

							$result = mysqli_query($conn,"SELECT * FROM customers");
							
							while($row = mysqli_fetch_array($result)) 
							{
								echo "<tr><td>" . $row['user_name'];
								echo '<td><a href="mailto:'. $row['email'].'">'. $row['email'] .'</a>';
								echo "<td>" . $row['phone'];
							}
						?>	
					</table>
				</div>
			</div>	
		</div>
		<br/><br/>
	</body>
</html>