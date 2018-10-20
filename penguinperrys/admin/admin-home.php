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
	echo "<span style='color: #fff;'>You are logged in as: " . $_SESSION["username"] . "</span>";// . ": " . $_SESSION["user_id"];
}
include '../datalogin.php';
include 'admin-header.html'; 
?>

		<div class="admin-container">
			<div class="heading text-center"> 
				<h3>Admin Area</h3>
				<h4>Home</h4>
			</div>
			
			<iframe src="https://p3plcpnl0555.prod.phx3.secureserver.net:2083/cpsess2187231757/tmp/travis915/webalizer/index.html"></iframe>
		</div>
		<br/><br/>
		
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.slicknav.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('#menu').slicknav();
				
			});
		</script>
	</body>
</html>