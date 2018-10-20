<?PHP
$currentPage = 'About';
include 'header.php';
?>
<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
	<div class="row_5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 reserve_table">
					
					<?PHP
					include 'datalogin.php';
					
					$result = mysqli_query($conn,"SELECT * FROM content");		
					while($row = mysqli_fetch_array($result)) 
					{
						if($row['identifier'] == 'about_company') {
							$about_company = $row['content_text'];
						} elseif($row['identifier'] == 'travis_bio') {
							$travis_bio = $row['content_text'];
						}
					}
					?>
					
					<div class="row">
						<div class="col-sm-10 col-sm-push1 col-xs-12">
							<h2>Our Mission</h2>
							<figure><img src="img/foodtruck1.jpg" alt="" width="350px"></figure>
							<p class="m_bot1"><?php echo $about_company; ?> </p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-10 col-sm-push1 col-xs-12">
							<h2 class="pad_top1">About the Owner</h2>
							<img src="img/travis.jpg" alt="" width="150px" class="float-left">
							<img src="img/schunzel.jpg" alt="" width="150px" class="float-right">
							<p class="m_bot2"><?php echo $travis_bio; ?></p>
						</div>
					</div>
					
				</div>
				
				<!--<div class="col-sm-offset-1 col-sm-4">
					<h2>How I Work</h2>
					<hr class="line2">
					<p class="title5">Vivamus eget tincidunt lacus, eget dapibus pendisse at tempus quam.</p>
					<h2 class="pad_bot1">Hire Me Now</h2>
					<form id="contact-form2" class="reservation-form">
						<div class="success">Reservation form submitted! <strong>We will be in touch soon.</strong> </div>
						<fieldset>
							<div class="coll-1">
								<div class="txt-form">Name<span></span></div>
								<label class="name">
								<input type="text" value="Name:"><br>
								<span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="coll-2">
								<div class="txt-form">Email<span>:</span></div>
								<label class="email">
								<input type="email" value="E-mail:"><br>
								<span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="coll-3">
								<div class="txt-form">phone:</div>
								<label class="arrival notRequired">
								<input type="tel" value="Phone:"><br>
								<span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="coll-4">
								<div class="txt-form">phone:</div>
								<label class="Length of stay notRequired">
								<input type="tel" value="Fax:"><br>
								<span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="clear"></div>
							<div>
								<div class="txt-form">Comment<span>*</span></div>
								<label class="message">
								<textarea>Comments:</textarea><br>
								<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
							</div>
							<div class="clear"></div>
						</fieldset>
						<div class="buttons-wrapper clearfix"><a href="#" class="btn-link btn-link2" data-type="submit">send<span></span></a><a href="#" class="btn-link btn-link2" data-type="reset">clear<span></span></a></div>
					</form>
				</div>-->
			</div>
		</div>
	</div>
</div>

<?PHP 
include 'footer.html';
?>