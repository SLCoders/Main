<?php
    
    $to = 'info@gixez.com';
    $subject = $_POST['subject'];
    $message =  'Customer Message'."\n". $_POST['txt'];
    $contact =  'Customer Name - '.$_POST['name']."\n".
                'Customer Phone - '.$_POST['phone']."\n".
                'Customer Email - '.$_POST['email'];
    
   
    mail($to,$subject,$message,$contact);
  
    if($_POST['email']){
		header('location: thanks.html');
	}else{
		header('location: error.html');
	}
   
?>