<?php
session_start();
$con=mysqli_connect("localhost","root","")or die("Unnable to connect");
mysqli_select_db($con,"meapp");

$halltno=$_SESSION['hnumber'];

$query="SELECT * FROM `studentdata` WHERE hallticketno='$halltno'";
$query_run=mysqli_query($con,$query);

$row=mysqli_fetch_assoc($query_run);

$image=$row['picName'];
//echo $image;
$imagesrc="images/".$image;
?>

<!DOCTYPE html>
<html>
<head>
	<title>hall ticket</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		h1,h2
		{
			text-align: center;
		}
		body
		{
	/*		height: 65%;
			width: 65%;*/
			
		}
		img
		{	
			margin-top:15px;
			width:200px;
			height: 150px;
			border :1px solid black;
			border-radius: 5%;
			padding:1px;
			border: none;
		}
		.containe
		{
			margin: 0 200px;
			margin-top: 5px;
			padding: 20px;
			border :1px solid black;
			/*width:90%;*/
			border-radius: 1%;	
		}
		h2
		{
			text-transform: uppercase;
		}
		#sign
		{
			text-align: right;
			font-weight: 600;
		}
		span
		{
			letter-spacing: 0.7px;
		}
		hr 
			{
			    display: block;
			    height: 1px;
			    border: 0;
			    border-top: 1px solid black;
			    margin: 1em 0;
			    padding: 0; 
			}
			#place
			{
				text-align: right;
				margin-right: 30px;
			}
	
			#two
			{
				margin-left: 35px;
			}
			span 
			{
				font-weight: 600;
			}
			.col-sm-4
			{
				font-weight: 600;
				padding-left: 18px;
			}
		
			#sign
			{
				margin-top=0px;
				padding-right: 100px;
			}
			#myphoto
			{
				
				width: 140px;
				height: 180px;

			}
			#photospace
			{
				padding-bottom: 50px;
			}
			#place
			{
				margin-left: 50%;
			}
		.row{
			font-size:20px;
			font-family: "Times New Roman", Times, serif;
		}

@media print {
	@page 
	{
		size: landscape;
    	margin-top: 0px;	
 	}
 	.containe
		{
			margin: 5px;
			padding: 20px;
			border :1px solid black;
			/*width:90%;*/
			border-radius: 1%;	
		}
    body 
    {	
    	transform: scale(0.72);
		width: 100%;
    }
    /*table {page-break-inside: avoid;}*/
}
	</style>
<script type="text/javascript">
	function prin()
	{
		window.print()
	}
</script>

</head>
<body>

<button id="place" onclick="prin()">Print</button>

	<div  class="containe" id="section-to-print">
		<div class="row" id="header">
			<div class="col-sm-3">
			<img src="1.jpg">
			</div>
			<div class="col-sm-6">
				<h1>OSMANIA UNIVERSITY</h1>
				<h2>Hallticket for PTPG Entrance Exam</h2>
			</div>
			<div class="col-sm-3">
				<img src="2.jpg" id="two">
			</div>
		</div>

		<hr>

<center>	<u><h3>Student Information</h3></u></center>
			<div class=row>
			<div class=col-sm-8>
				<div class="row">
					<div class="col-sm-4">Candidate's Name :
					</div>
				<div class="col-sm-3"><span id="name">
					<?php echo $row['cname'];?>
					</span><br></div>
				</div>
					
						<div class="row">
							<div class="col-sm-4">Hall Ticket Number :
						</div>
						<div class="col-sm-3"><span id="Hnumber">
						<?php echo $halltno;?>
						</span><br></div>
						</div>
						

						<div class="row">
							<div class="col-sm-4">Father's Name :</div> 	
							 <div class="col-sm-3">
							 <span id="fatherName">
							 <?php echo $row['names1'];?>
							 </span></div>
							</div>
						
						
						<div class="row">
						<div class="col-sm-4">Date Of Birth :
						</div>
						<div class="col-sm-3"><span id="dob">
						<?php echo $row['dob'];?>
						</span><br></div></div>
						
						

						<div class="row">
						<div class="col-sm-4">
						Address 	:
						</div>
						<div class="col-sm-3"> <span id="address"><p>
						<?php echo $row['addr'];?>
						</p></span>
						</div>
						</div>
						

						<div class="row">
						<div class="col-sm-4">Date of Exam :
						</div> 	  	<div class="col-sm-3">
						 <span id="examDate">27-07-2019</span><br></div></div>
						

						 <div class="row">
						<div class="col-sm-4">Examination Time:
						</div> 	  
						<div class="col-sm-3">
						 <span id="examTime">10:00 AM to 1:00PM</span><br></div></div>
						</div>
				
				<div class="col-sm-4" id="photospace">
				<img src='<?php echo $imagesrc;?>'>
				</div>

			</div>
				<div id=sign>Signature of Gazetted Officer with Signature</div>
				<hr class="dash">
				<b><h3>NOTE :</h3></b>
				<ol>
					<li>NOTE 1</li>
					<li>NOTE 2</li>
					<li>NOTE 3</li>
					<li>NOTE 4</li>
					<li>NOTE 5</li>
					<li>NOTE 6</li>
				</ol>
	</div>

	<br><center>
	<button id="exit" <a href="#null" onClick="window.close();">EXIT</button></a></center>
</body>
<?php session_destroy();
?>
</html>