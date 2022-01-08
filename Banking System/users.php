<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		* {
			box-sizing: border-box;
		}
		input[type=text], select, textarea {
			width: 100%;
			padding: 15px;
			border: 2px solid rgb(70,65,65)
			border-radius: 5px;
			resize: vertical;
		}
		input[type=number], select, textarea {
			width: 100%;
			padding: 15px;
			border: 2px solid rgb(70,65,65)
			border-radius: 5px;
			resize: vertical;
		}
		input[type=email], select, textarea {
			width: 100%;
			padding: 15px;
			border: 2px solid rgb(70,65,65)
			border-radius: 5px;
			resize: vertical;
		}
		label {
			padding: 15px 15px 15px 0;
			display: inline-block;
		}
		input[type=submit] {
			background-color: white;
			color: black;
			padding: 15px 20px;
			border: none;
			cursor: pointer;
			float: left;
		}
		input[type=submit]: hover {
			background-color: green;
			padding: 25px;
		}
		input[type=reset] {
			background-color: white;
			color: black;
			padding: 15px 20px;
			border: none;
			cursor: pointer;
			float: center;
		}
		input[type=reset]: hover {
			background-color: green;
			padding: 25px;
		}
		.container {
			border-radius: 5px;
			padding: 20px;
		}
		.navbar
		{
	    	width:100%;
	    	white-space:nowrap;
	    	background-color: #5E11A3;
		}
		.right{width:10%; float:right;}
		.col-5 {
			float: left;
			width: 25%;
			margin-top: 5px;
		}
		.col-75 {
			float: left;
			width: 75%;
			margin-top: 5px;	
		}
		/*clear floats after the columns*/
		.row:after {
			content: " ";
			display: table;
			clear: both;
		}
		/* screen styling is done on the basis of screen atrea available (if less than 600px[wide], divide the columns; (stack up the columns one after the another*/
	</style>
</head>
<body background="images/bg12.jpg">
	<div class="container">
		<div class="row col-md-6 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h1 style="color:white;">Connect with Us...</h1>
					<p style="color: white">This is a simple policy of TSF Bank, where the User has to add details such as - Full Name, Valid E-Mail Address, Balance Amount etc...</p>
				</div>
				<br>
				<div class="panel-body">
					<form id="userdet" action="conusers.php" method="POST">
					<div class="row" style="color: white;">
					<div class="col-25">
						<label for="name"> Name </label>
					</div>
					<div class="col-75">
						<input type="text" id="name" name="name", placeholder="Full Name", required="required">
					</div>
					</div>
					<div class="row" style="color: white;">
					<div class="col-25">
						<label for="email"> E-Mail </label>
					</div>
					<div class="col-75">
						<input type="email" id="email" name="email", placeholder="Valid E-Mail Address", required="required">
					</div>
					</div>
					<div class="row" style="color: white;">
					<div class="col-25">
						<label for="balance"> Balance </label>
					</div>
					<div class="col-75">
						<input type="text" id="balance" name="balance", placeholder="Balance Amount", required="required">
					</div>
					</div>
					<br>
					<input class="app-form-button" type="submit" value="Add Details" name="submit"></input>  
					<input class="app-form-button" type="reset" value="Reset Details" name="reset"></input>
						
					</form>
				</div>
					<br>
					<br>
					<br>
					<br>
					<div class="footer">
					<p><a style="color: white; text-decoration: underline;" href="homepg.html"> Click Here to go to Home Page </a> </p>
					<div style="color: white" class="panel-footer" text="right">
						<small>&copy;TSFBank</small>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
