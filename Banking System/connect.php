<?php

$db=mysqli_connect("localhost", "root", "", "tsfbank");
if($db=== false) {
	die("Connection Failed!" .mysqli_connect_error());
}

$name='';
$email='';
$balance='';