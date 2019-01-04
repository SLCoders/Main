<?php
    $subsemail = $_POST["email"];
    
	$link = mysqli_connect("localhost","root","","subdetails");
	$query = "INSERT INTO substbl(email) VALUES('$subsemail')";
	$run = mysqli_query($link,$query);
	//var_dump($run);
	if($run){
		header('location: thanks.html');
	}else{
		header('location: error.html');
	}
?>