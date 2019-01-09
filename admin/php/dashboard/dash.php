<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gixez Dashboard</title>
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<!-- <script src="js/jquery-1.11.0.min.js"></script> -->
<script src="js/jquery-3.2.1.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js"></script>
<script src= "js/moment-2.2.1.js"></script>
<script src="js/clndr.js"></script>
<script src="js/site.js"></script>
</head>

<body>
<div class="container-fluid"><br>
  <h1 class="text-uppercase text-center"><strong>Gixez Dashboard</strong></h1><br><hr>
</div>
<div class="container-fluid">
  <div class="row">
	  
	  <div class="col-xl-10">
	  	<div id="accordion1" role="tablist">
	  	  <div class="card">
	  	    <div class="card-header" role="tab" id="headingOne1">
	  	      <h5 class="mb-0"> <a data-toggle="collapse" href="#collapseOne1" role="button" aria-expanded="true" aria-controls="collapseOne1">Customer Quotes</a> </h5>
  	        </div>
	  	    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1">
	  	      <div class="card-body">
				  
				<?php 
				  
				  $conn = mysqli_connect("localhost","root","","gixez");

				  $q = "SELECT * FROM quote_data";

				  $result = mysqli_query($conn,$q);

				  echo "<table border='1'>";
						echo "<tr>".
											"<td>"."<strong>"."Bussiness Type"."</strong>"."</td>".
											"<td>"."<strong>"."Business Name"."</strong>"."</td>".
											"<td>"."<strong>"."Pages"."</strong>"."</td>".
											"<td>"."<strong>"."Project Details"."</strong>"."</td>".
											"<td>"."<strong>"."Refer Web"."</strong>"."</td>".
											"<td>"."<strong>"."Domain Status"."</strong>"."</td>".
											"<td>"."<strong>"."Current Domain"."</strong>"."</td>".
											"<td>"."<strong>"."Contact Name"."</strong>"."</td>".
											"<td>"."<strong>"."Email"."</strong>"."</td>".
											"<td>"."<strong>"."Phone"."</strong>"."</td>".
											"<td>"."<strong>"."Full Project Details"."</strong>"."</td>".
										"</tr>"; // add heding for table 
				  while($row=mysqli_fetch_assoc($result)){
					$id=$row["bztype"];
					echo "<tr>";
					echo "<td>".$row["bztype"]."</td>";
					echo "<td>".$row["bzname"]."</td>";
					echo "<td>".$row["pgecunt"]."</td>";
					echo "<td>".$row["prodetils"]."</td>";
					echo "<td>".$row["refweb"]."</td>";
					echo "<td>".$row["curntstus"]."</td>";
					echo "<td>".$row["dostus"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["mail"]."</td>";
					echo "<td>".$row["phone"]."</td>";
					echo "<td>".$row["fullprodetils"]."</td>";
					//echo "<td><a href='editForm.php?id=$id'>edit </a></td>";
					//echo "<td><a href=''>delete </a></td>";
					//echo "<td><a href=''>view </a></td>";
					echo "</tr>";
				  	}
				  	echo "</table>";
				  	
				?>
				
				</div>
  	        </div>
  	      </div>
	  	  <div class="card">
	  	    <div class="card-header" role="tab" id="headingTwo1">
	  	      <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1">Customer Package Request </a> </h5>
  	        </div>
	  	    <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
	  	      <div class="card-body">
						<?php 
				  
				  $conn = mysqli_connect("localhost","root","","db_matrix");

				  $q = "SELECT * FROM tbl_user";

				  $result = mysqli_query($conn,$q);

				  echo "<table border='1'>";
				  	echo "<tr>"."<td>"."ID"."</td>"."<td>"."ID"."</td>"."<td>"."ID"."</td>"."</tr>"; // add heding for table 
				  while($row=mysqli_fetch_assoc($result)){
					$id=$row["id"];
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["username"]."</td>";
					echo "<td><a href='editForm.php?id=$id'>edit </a></td>";
					echo "<td><a href=''>delete </a></td>";
					echo "<td><a href=''>view </a></td>";
					echo "</tr>";
				  	}
				  	echo "</table>";
				  	
				?>
						</div>
  	        </div>
  	      </div>
	  	 
  	    </div>
      </div>
	  <div class="col-xl-2">
	  			<div class="cal1"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">November 2013</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day past adjacent-month last-month calendar-day-2013-10-27"><div class="day-contents">27</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-28"><div class="day-contents">28</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-29"><div class="day-contents">29</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-30"><div class="day-contents">30</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-31"><div class="day-contents">31</div></td><td class="day past calendar-day-2013-11-01"><div class="day-contents">1</div></td><td class="day past calendar-day-2013-11-02"><div class="day-contents">2</div></td></tr><tr><td class="day past calendar-day-2013-11-03"><div class="day-contents">3</div></td><td class="day past calendar-day-2013-11-04"><div class="day-contents">4</div></td><td class="day past calendar-day-2013-11-05"><div class="day-contents">5</div></td><td class="day past calendar-day-2013-11-06"><div class="day-contents">6</div></td><td class="day past calendar-day-2013-11-07"><div class="day-contents">7</div></td><td class="day past calendar-day-2013-11-08"><div class="day-contents">8</div></td><td class="day past calendar-day-2013-11-09"><div class="day-contents">9</div></td></tr><tr><td class="day past event calendar-day-2013-11-10"><div class="day-contents">10</div></td><td class="day past event calendar-day-2013-11-11"><div class="day-contents">11</div></td><td class="day past event calendar-day-2013-11-12"><div class="day-contents">12</div></td><td class="day past event calendar-day-2013-11-13"><div class="day-contents">13</div></td><td class="day past event calendar-day-2013-11-14"><div class="day-contents">14</div></td><td class="day past calendar-day-2013-11-15"><div class="day-contents">15</div></td><td class="day past calendar-day-2013-11-16"><div class="day-contents">16</div></td></tr><tr><td class="day past calendar-day-2013-11-17"><div class="day-contents">17</div></td><td class="day past calendar-day-2013-11-18"><div class="day-contents">18</div></td><td class="day past calendar-day-2013-11-19"><div class="day-contents">19</div></td><td class="day past calendar-day-2013-11-20"><div class="day-contents">20</div></td><td class="day past event calendar-day-2013-11-21"><div class="day-contents">21</div></td><td class="day past event calendar-day-2013-11-22"><div class="day-contents">22</div></td><td class="day today event calendar-day-2013-11-23"><div class="day-contents">23</div></td></tr><tr><td class="day calendar-day-2013-11-24"><div class="day-contents">24</div></td><td class="day calendar-day-2013-11-25"><div class="day-contents">25</div></td><td class="day calendar-day-2013-11-26"><div class="day-contents">26</div></td><td class="day calendar-day-2013-11-27"><div class="day-contents">27</div></td><td class="day calendar-day-2013-11-28"><div class="day-contents">28</div></td><td class="day calendar-day-2013-11-29"><div class="day-contents">29</div></td><td class="day calendar-day-2013-11-30"><div class="day-contents">30</div></td></tr></tbody></table></div></div>

	  </div>
  </div>
</div>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.0.0.js"></script>
</body>
</html>