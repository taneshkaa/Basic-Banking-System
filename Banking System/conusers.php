<?php
	include 'connect.php';
	if(isset($_POST['submit'])){
// Storing form values into PHP variables
$name = $_POST['name']; // Since method=”post” in the form
$email = $_POST['email'];
$balance = $_POST['balance'];
}

$query = "INSERT INTO users(name, email, balance) VALUES('$name', '$email', '$balance')";
if (mysqli_query($db, $query))  {
	echo "User Details Added Successfully!";
} else {
	echo "Ops! Error in Adding User Details"; }
	
mysqli_close($db);

?> 

<footer>
	<div class="panel-footer text-right">
		<p><a style="color: black; text-decoration: underline;" href="homepg.html"> Click Here to go to Home Page </a> </p>
		<small>&copy;TSF Bank</small>			
	</div>
</footer>