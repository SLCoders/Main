<?php
    session_start();
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $link = mysqli_connect('localhost','root','','gixez');
	$q = "SELECT username,password FROM register WHERE username = '$uname' AND password = '$password' ";
	$run = mysqli_query($link,$q);
	
	if($row=mysqli_fetch_assoc($run)){
		$_SESSION["currentUserDetails"] = array(
			"username"=> $row["username"],
			"password"=> $row["password"],
		);
		header("location: dashboard/dash.php");
	}else{
		header("location: index.php");
	}



    //var_dump($uname,$password);
?>