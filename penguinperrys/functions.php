<?php
date_default_timezone_set('America/Los_Angeles');

function convertMoney($amount)
{
	$price = "<span class='money'>$" . number_format($amount) . "</span>";
	
	return $price;
}

function loadStates()
{
	echo '<option value="" disabled selected>Select state</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>';
}



function checkIfSet($variable)
{
	if(isset($variable)){
		return escape($variable);
	}
	else{
		return null;
	}
}

//escapes all foreign characters from user's input
function escape($str)
{
	$search=array("\\","\0","\n","\r","\x1a","'",'"');
	$replace=array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
	return str_replace($search,$replace,$str);
}

function uploadInventory($target_file, $fileToUpload)
{
	$uploadOk = 1;
	$return = '';
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($fileToUpload["tmp_name"]);
		if($check !== false) {
			$return .= "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			$return .= "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		$return .= "Sorry, file name already exists.";
		$uploadOk = 0;
	} 
	
	// Check file size
	if ($fileToUpload["size"] > 50000000) {
		$return .= "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "JPEG" && $imageFileType != "PNG" && $imageFileType != "GIF") {
		$return .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$return .= "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		//image_fix_orientation($fileToUpload["tmp_name"]);
		if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
			$return .= "<br>The file ". basename( $fileToUpload["name"]). " has been uploaded.";
		} else {
			$return .= "Sorry, there was an error uploading your file.";
		}
	}
	
	return $return;
}

function rand_str($length = 8, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890') 
{
	$chars_length = (strlen($chars) - 1); // Length of character list
	$string = $chars{rand(0, $chars_length)}; // Start our string
	for ($i = 1; $i < $length; $i = strlen($string)) { // Generate random string
		$r = $chars{rand(0, $chars_length)}; // Grab a random character from our list
		$string .=  $r; // Make sure the same two characters don’t appear next to each other
	}

	return $string;
}


?>