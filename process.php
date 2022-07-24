<?php
include_once 'databaseretrieve.php';
if(isset($_REQUEST['save']))
{	 
	 $name = $_REQUEST['name'];
	 $email = $_REQUEST['email'];
	 $country = $_REQUEST['country'];
	 $message = $_REQUEST['message'];
	 $sql = "INSERT INTO contact_us (name,email,country,message)
	 VALUES ('$name','$email','$country','$message')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>