<?PHP
$currentPage = 'Catering';
include 'header.php';

$success = false;
if(isset($_POST['send-msg'])) {
	include 'bat/MailHandler.php';
}

?>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
       <div class="container">
			<div class="row">
				<div class="col-md-7 col-xs-12 reserve_table info">
					<h2>Catering</h2>
					<figure><img src="img/cookies.jpg" alt="" width="300px"></figure>
					<h3>We have a few catering options to choose from depending on size, type and budget of your event.</h3>
					<h3>If you have something special in mind we are always open to collaborate.</h3>
					<h3>The first step to setting up an event catered by Penguin Perry's is to contact us using the form provided, or <a href="contact.php">contact us here</a>.</h3>
					
				</div>
                
				<div class="col-sm-offset-1 col-sm-4">
					<!--<h2>Contact Us Now To Get Started!</h2>
						<hr class="line2">-->
					<br><br><p class="title5">Contact Us Now To Get Started!</p>
					<!--<h2 class="pad_bot1">Hire Me Now</h2>-->
					
					<form action="" method="post" id="contact-form2" class="reservation-form">
						<?php 
							if($success)
								echo '<div class="success"> Your message was sent. <br /><strong>We will be in touch soon.</strong> </div>';
						?>
						<fieldset>
							<div class="coll-1">
								<div class="txt-form">Name:<span></span></div>
								<label class="name">
								<input type="text" name="name" required placeholder="First & Last Name*:"><br>
								<span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="coll-2">
								<div class="txt-form">Email:<span></span></div>
								<label class="email">
								<input type="email" name="email" required placeholder="Email*:"><br>
								<span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="coll-3">
								<div class="txt-form">Phone:</div>
								<label class="arrival notRequired">
								<input type="tel" name="phone" placeholder="Phone:"><br>
								<span class="error">*This is not a valid phone number.</span> </label>
							</div>
							<div class="clear"></div>
							<div>
								<div class="txt-form">Comment<span>*</span></div>
								<label class="message">
								<textarea name="message" required placeholder="Comments:"></textarea><br>
								<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							
							<input type="hidden" name="msg-type" value="catering">
						</fieldset>
						
						<input type="submit" name="send-msg">
						<!--<div class="buttons-wrapper clearfix"><a href="#" class="btn-link btn-link2" data-type="submit">send<span></span></a><a href="#" class="btn-link btn-link2" data-type="reset">clear<span></span></a></div>-->
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?PHP 
include 'footer.html';
?>