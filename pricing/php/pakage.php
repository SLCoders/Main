<?php 
    
    $fristname = $_POST['fname'];
    $lastname = $_POST['fname'];
    $comname = $_POST['cname'];
    $email = $_POST['email'];
    $onum = $_POST['ONumber'];
    $pnum = $_POST['PNumber'];
    $Caddr = $_POST['Caddress'];

  $link = mysqli_connect('localhost','root','','gixez');
  $query = "INSERT INTO pakage_req(fname,lname,cname,mail,cnuberoff,cnummo,caddress)
			VALUES('$fristname','$lastname','$comname','$email','$onum','$pnum','$Caddr')";
	$run = mysqli_query($link,$query);
	if($run){
		header('location: thanks.html');
	}else{
		header('location: error.html');
	}
?>