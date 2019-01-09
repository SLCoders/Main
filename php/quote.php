<?php

$bustype = $_POST['buissnesType'];
$busname = $_POST['busname'];
$pgecunt = $_POST['pagecount'];
$proditls = $_POST['prodetails'];
$referweb = $_POST['referweb'];
$curwebstus = $_POST['currentwebstatus'];
$curdostus = $_POST['domainstatus'];
$cusname = $_POST['cname'];
$cusmail = $_POST['cmail'];
$cusphone = $_POST['cphone'];
$fullpro = $_POST['fullprodetails'];

$link = mysqli_connect('localhost','root','','gixez');
$query = "INSERT INTO quote_data(bztype,bzname,pgecunt,prodetils,refweb,curntstus,dostus,name,mail,phone,fullprodetils)
		  VALUES('$bustype','$busname','$pgecunt','$proditls','$referweb','$curwebstus','$curdostus','$cusname','$cusmail','$cusphone','$fullpro')";
$run = mysqli_query($link,$query);
?>