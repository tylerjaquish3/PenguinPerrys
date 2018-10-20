<?PHP
$currentPage = 'Contact';
include 'header.php';

$success = false;
if(isset($_POST['send-msg'])) {
	include 'bat/MailHandler.php';
}
?>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row8=================================-->
    <div class="row_8">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><h2>Contact Us</h2></div>
				<div class="col-sm-4 col-xs-12 address">
					
					<address>
						<div class="info">
							<p>E-mail: <a href="mailto:#">info@penguinperrys.com</a></p>
							<br /><br />
							<a href="http://facebook.com/PenguinPerrys"><i class="fa fa-facebook-square"></i> Facebook</a><br />
							<a href="http://instagram.com/penguinperrys/"><i class="fa fa-instagram"></i> Instagram</a><br />
							<a href="http://twitter.com/PenguinPerrys"><i class="fa fa-twitter-square"></i> Twitter</a>
						</div>
					</address>
					
				</div>
				<div class="col-sm-8 col-xs-12 address">
					<!--<h2>Contact Form</h2>-->
					
					<form action="" method="post" id="contact-form" class="contact-form">
						<?php 
							if($success)
								echo '<div class="success"> Your message was sent. <br /><strong>We will be in touch soon.</strong> </div>';
						?>
						<fieldset>
							<div class="coll-1">
						  
								<label class="name">
								<input name="name" type="text" value="" required placeholder="First & Last Name*:"><br>
								<span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="coll-2">
								<div class="txt-form">Email<span>:</span></div>
								<label class="email">
								<input name="email" type="email" value="" required placeholder="E-mail*:"><br>
								<span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="coll-3">
								<div class="txt-form">phone:</div>
								<label class="phone notRequired">
								<input name="phone" type="tel" value="" placeholder="Phone:"><br>
								<span class="error">*This is not a valid phone number.</span> </label>
							</div>
							<div class="clear"></div>
							<div>
								<div class="txt-form">Comment<span>*</span></div>
								<label class="message">
								<textarea name="message" required placeholder="Message*:"></textarea><br>
								<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							
							<input type="hidden" name="msg-type" value="generic">
							
						</fieldset>
						<div class="buttons-wrapper clearfix">
							<input type="submit" name="send-msg">
							<!--<a href="#" class="btn-link btn-link2" name="send-msg" data-type="submit">submit<span></span></a>-->
							<strong>*REQUIRED FIELDS</strong>
						</div>
					</form>
				</div>
			</div> 
		</div>
    </div>
</div>

<?PHP 
include 'footer.html';
?>