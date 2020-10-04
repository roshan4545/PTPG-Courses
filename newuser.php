<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit'])) {
    require "C:\xampp\htdocs\PGApplication-master\PG\config.php";
    require "/common.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
		
		
				

		$new_user = array(
            "department" => $_POST['department'],
            "caste"  => $_POST['caste'],
			"cat"     => $_POST['cat'],
			"cname"     => $_POST['cname'],
			"fname"     => $_POST['fname'],
			"focc"     => $_POST['focc'],
			"mname"     => $_POST['mname'],
			"addr"     => $_POST['addr'],
			"mobno"     => $_POST['mobno'],
			"email"     => $_POST['email'],
			"dob"     => $_POST['dob'],
			"addr1"     => $_POST['addr1'],
			
			"empd"     => $_POST['empd'],
			"empd2"     => $_POST['empd2'],
			"ssc_board"     => $_POST['ssc_board'],
			"ssc_inst"     => $_POST['ssc_inst'],
			"ssc_div"     => $_POST['ssc_div'],
			"ssc_agg"     => $_POST['ssc_agg'],
			"ssc_passDate"     => $_POST['ssc_passDate'],
			"im_board"     => $_POST['im_board'],
			"im_clg"     => $_POST['im_clg'],
			"im_div"     => $_POST['im_div'],
			"im_agg"     => $_POST['im_agg'],
			"im_passDate"     => $_POST['im_passDate'],
			"be_board"     => $_POST['be_board'],
			"be_clg"     => $_POST['be_clg'],
			"be_div"     => $_POST['be_div'],
			"be_agg"     => $_POST['be_agg'],
			"be_passDate"     => $_POST['be_passDate'],
			"msc_board"     => $_POST['msc_board'],
			"msc_clg"     => $_POST['msc_clg'],
	        "msc_div"     => $_POST['msc_div'],
            "msc_agg"       => $_POST['msc_agg'],
            "msc_passDate"  => $_POST['msc_passDate'],
			"status"  =>"pending"
			
        );
		
		
		
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "users",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>










<html>
    <head><title>ME APPLICATION</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link   rel="stylesheet"   href="style.css">

	 <script type="text/javascript" src="class.js"></script>
    </head>
   
    <body>
     <center><img src="logo1.jpeg" height = "100" width ="120" alt= "not found"></center>
      </n>
       <h1>Center for continuing Engineering Education Programme(CEEP)</h1>
      <h1>University College of Engineering</h1>
      <h1>Osmania University,Hyderabad - 500 007</h1> 
     <hr>
    <b><u><h2>Application Form for M.E/M.Tech (PTPG) Admissions</h2>
    </u></b>
    <hr>
    <form method="post"  enctype="multipart/form-data" class="form-horizontal">
    <div class ="entry">
    <div class="container-fluid"> 
       Please select the proper options.(<span class="required">*</span> required fields)
      <br>
      
      <br>  
       Department to which Admission is sought:<span class="required">*</span><br>
        <input type = "radio" name = "department" value = "CSE"  required>CSE
        <input type = "radio" name = "department" value = "ECE" required>ECE
        <input type = "radio" name = "department" value = "MECH" required>MECH             
        <input type = "radio" name = "department" value = "EEE" required>EEE
        <input type = "radio" name = "department" value = "CIVIL" required>CIVIL
      <br>
      <br>
       Category:<span class="required">*</span> <br>
        <input type = "radio" name = "caste" value = "OC"  required>OC
        <input type = "radio" name = "caste" value = "BCA" required>BC-A
        <input type = "radio" name = "caste" value = "BCB" required>BC-B
        <input type = "radio" name = "caste" value = "BCC" required>BC-C
        <input type = "radio" name = "caste" value = "BCD" required>BC-D
        <input type = "radio" name = "caste" value = "BCE" required>BC-E
        <input type = "radio" name = "caste" value = "SC" required>ST             
        <input type = "radio" name = "caste" value = "ST" required>SC
	   <br><br>
	   Select Category:<span class="required">*</span><br>
       <input type="radio" name="cat" value="local"  required>Local
	   <input type="radio" name="cat" value="nlocal" required>Non Local
	   <br><br>
  </div></div>
   <br>
 
<div class="row">      
	<div class="form-group">
	 <label class="col-md-4 control-label" for="cname" ><b>1.Full name of the candidate <span class="required">*</span></b></label>
     <div class="col-md-4">
     <input type = "text" name ="cname" id="inf1" onkeyup="validate(1)" class=" form-control details" required>
   </div>
   <div id="error"></div>
</div></div>
   <br>
   <div class="row">
   	<div class="form-group">
   <label  for="fname" class = "col-md-4 nms control-label" > <b>2.&nbspa) Father's / Guardian's Name</b><span class="required">*</span></label>
     <div class="col-md-4">
     <input type = "text" name ="fname" class="details form-control" id="inf2" onkeyup="validate(2)" required>
   </div></div></div>
   <br>

   <div class="row">
   	<div class="form-group">
     <label for="focc" class = "col-md-4 nms1 control-label"><b> &nbsp&nbspb) Occupation of Father</b><span class="required">*</span></label>
     <div class="col-md-4">
     <input type = "text" name ="focc" class="form-control details" id="inf3" onkeyup="validate(3)" required>
   </div></div></div>
   <br>

   <div class="row">
   	<div class="form-group">
     <label for="mname" class = "col-md-4 nms1 control-label"><b>&nbsp&nbspc) Mother's Name</b><span class="required">*</span></label>
     <div class="col-md-4">
     <input type = "text" name ="mname" class="form-control details" id="inf4" onkeyup="validate(4)" required>
     </div></div></div>
     
     <br>
   <div class="row">
   	<div class="form-group">
   <label class="col-md-3 control-label" for="addr" ><b>3.Permanent Postal Address</b><span class="required">*</span></label>
     <div class="col-md-4">  
		<textarea name ="addr" class="form-control details" rows="4" required></textarea>

   </div></div></div>
     <br>

    	<b class="info">4.Personal Details</b>
    	<br>

    	<br>
    <div class="row">
     	<div class="form-group">
     		<label for="mobno" class="col-md-3 control-label"><b> &nbspa)Mobile Number</b><span class="required">*</span></label>
    			<div class="col-md-4">
    				<input type = "number" name ="mobno" minlength="10" maxlength="10" class="form-control details" required>
    			</div>
    	</div>
    </div>
    <br>
     
     <div class="row">
     	<div class="form-group">
    		 <label for="email" class="col-md-3  control-label" ><b>&nbspb)E-Mail</b><span class="required">*</span></label>
     			<div class="col-md-3">
    				<input type = "email" name ="email" class="form-control details" required>
   				 </div>
		</div>
	</div>

    <br>

   <div class="row">
	   	<div class="form-group">
    		<label class="col-md-3 control-label" for="addr1"><b> &nbspc)Date of Birth</b><span class="required">*</span></label>
    			 <div class="col-md-3">
    				<input type="date" name ="dob" class="form-control details" required>
    			</div>
    	</div>
    </div>
    <br>
	    
     <div class="row">
   	<div class="form-group">
   <label for="addr1"class="col-md-3 control-label"><b> &nbspd)Address for Correspondence</b><span class="required">*</span></label>
    <div class="col-md-4">
    <textarea name ="addr1" class="form-control details" rows="4" required></textarea>
    </div></div></div>
    <br>

    <div class="row">
     	<div class="form-group">
    	  	 <label class="col-md-3 control-label" for="pic">&nbspe)Your photo:<span class="required">*</span></label>
      			 <div class="col-md-4">
      	 			<input type="file" id="height" name="pic" accept="image/*"  required>
  			    </div>
  		</div>	
  	</div>
    <br>

    <div class="row">
    		<b> &nbsp5.Employement Details :</b>
	</div>
	
	<br>
    <div class="row">
    	<div class="form-group">

    	<b><label class="col-md-4 control-label" for="empd"> &nbspa) Name and Address of the Employer<span class="required">*</span></label> </b>
    <div class="col-md-4">
    <input type="text" name ="empd" class="form-control details" required>
	</div></div></div>
	<br>
    <div class="row">
    	<div class="form-group">

    <b><label class="col-md-4 control-label" for="empd2"> &nbspb) Designation and Nature of the &nbsp&nbsp&nbspEmployement<span class="required">*</span></label></b>
    	<div class="col-md-4">
    	<input type="text" name="empd2" class="form-control details" required>
   </div></div></div>
   </div>
   <br><br>

   <div class="row">
	<b> &nbsp6.Education Details :</b>
</div>
<hr>
   <h2>SSC or Equivalent</h2>
		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="ssc_board">Name of the Board<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="ssc_board" class="form-control details"  required>
				   </div>
			</div>
		</div>
		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="ssc_inst">Name of The Institution<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="ssc_inst" class="form-control details"  required>
				   </div>
			</div>
		</div>

		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="ssc_div">Division<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="ssc_div" class="form-control details"  required>
				   </div>
			</div>
		</div>

		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="ssc_agg">Aggregate / Percentage<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="ssc_agg" class="form-control details"  required>
				   </div>
			</div>
		</div>

		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="ssc_passDate">Year Of Passing<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="month" name="ssc_passDate" class="form-control details"  required>
				   </div>
			</div>
		</div>
		<hr>

		<h2>Intermediate or Equivalent</h2>
			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="im_board">Name of Board<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="im_board" class="form-control details"  required>
				   </div>
			</div>
		</div>
			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="im_clg">Name of the Institution<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="im_clg" class="form-control details"  required>
				   </div>
			</div>
		</div>
			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="im_div">Division<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="im_div" class="form-control details"  required>
				   </div>
			</div>
		</div>

		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="in_agg">Aggregate / Percentage<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="im_agg" class="form-control details"  required>
				   </div>
			</div>
		</div>

			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="im_passDate">Year Of Passing<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="month" name="im_passDate" class="form-control details"  required>
				   </div>
			</div>
		</div>
		<hr>





<h2>B.E/B.tech or Eqivalent</h2>
	<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="be_board">Name of Board<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="be_board" class="form-control details"  required>
				   </div>
			</div>
		</div>
			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="be_clg">Name of the Institution<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="be_clg" class="form-control details"  required>
				   </div>
			</div>
		</div>
			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="be_div">Division<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="be_div" class="form-control details"  required>
				   </div>
			</div>
		</div>

		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="be_agg">Aggregate / Percentage<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="text" name="be_agg" class="form-control details"  required>
				   </div>
			</div>
		</div>

			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="be_passDate">Year Of Passing<span class="required">*</span></label></b>
    				<div class="col-md-4">
    					<input type="month" name="be_passDate" class="form-control details"  required>
				   </div>
			</div>
		</div>
		<hr>



<h2>M.Tech/M.C.A or Equivalent</h2>
<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="msc_board">Name of Board</label></b>
    				<div class="col-md-4">
    					<input type="text" name="msc_board" class="form-control details" >
				   </div>
			</div>
		</div>
			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="msc_clg">Name of the Institution</label></b>
    				<div class="col-md-4">
    					<input type="text" name="msc_clg" class="form-control details" >
				   </div>
			</div>
		</div>
			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="msc_div">Division</label></b>
    				<div class="col-md-4">
    					<input type="text" name="msc_div" class="form-control details" >
				   </div>
			</div>
		</div>

		<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="msc_agg">Aggregate / Percentage</label></b>
    				<div class="col-md-4">
    					<input type="text" name="msc_agg" class="form-control details" >
				   </div>
			</div>
		</div>

			<div class="row">
    		<div class="form-group">
    			<label class="col-md-4 control-label" for="msc_passDate">Year Of Passing</label></b>
    				<div class="col-md-4">
    					<input type="month" name="msc_passDate" class="form-control details" >
				   </div>
			</div>
		</div>
		<hr>

        <br><br>
         
   	  <div id="payment_btn">
      <input type="submit" name="submit" class="btn btn-primary btn-lg"  value="Proceed To Payment">
      </div>
      <br>
      <br>
    </form>
    </body>  
</html>