<?php
    $subsemail = $_POST["email"];
    
	$link = mysqli_connect("localhost","root","","gixez");
	$query = "INSERT INTO cussubmail(submail) VALUES('$subsemail')";
	$run = mysqli_query($link,$query);
	//var_dump($run);
	if($run){
		header('location: thanks.html');
	}else{
		header('location: error.html');
	}
?>