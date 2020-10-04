<?php

 $username = $_POST['username'];
 $pass = $_POST['pass'];
 
 if($username=="cse" && $pass=="cse" ){
 

 
 try  {
        
        require "/config.php";
        require "/common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * 
                        FROM users
                        WHERE department ='CSE' and status='pending'";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }


        

    if ($result && $statement->rowCount() > 0) {
	?>
        <h2>Results</h2>

        <table class="table" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>department</th>
                    <th>caste</th>
                    <th>cat</th>
                    <th>cname</th>
                    <th>fname</th>
                    <th>focc</th>
					<th>mname</th>
					<th>addr</th>
					<th>mobno</th>
					<th>email</th>
					<th>dob</th>
					<th>addr1</th>
					<th>empd</th>
					<th>empd2</th>
					<th>ssc_board</th>
					<th>ssc_inst</th>
					<th>ssc_div</th>
					<th>ssc_agg</th>
					<th>im_board</th>
					<th>im_clg</th>
					<th>im_div</th>
					<th>im_agg</th>
					<th>im_passDate</th>
					<th>be_board</th>
					<th>be_clg</th>
					<th>be_div</th>
					<th>be_agg</th>
					<th>be_passDate</th>
					<th>msc_board</th>
					<th>msc_clg</th>
					<th>msc_div</th>
					<th>msc_agg</th>
					<th>msc_passDate</th>
					<th>Status</th>
					<th>Accept/Reject</th>
					

                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["department"]); ?></td>
                <td><?php echo escape($row["caste"]); ?></td>
                <td><?php echo escape($row["cat"]); ?></td>
                <td><?php echo escape($row["cname"]); ?></td>
                <td><?php echo escape($row["fname"]); ?></td>
                <td><?php echo escape($row["focc"]); ?> </td>
				<td><?php echo escape($row["mname"]); ?> </td>
				<td><?php echo escape($row["addr"]); ?> </td>
				<td><?php echo escape($row["mobno"]); ?> </td>
				<td><?php echo escape($row["email"]); ?> </td>
				<td><?php echo escape($row["dob"]); ?> </td>
				<td><?php echo escape($row["addr1"]); ?> </td>
				<td><?php echo escape($row["empd"]); ?> </td>
				<td><?php echo escape($row["empd2"]); ?> </td>
				<td><?php echo escape($row["ssc_board"]); ?> </td>
				<td><?php echo escape($row["ssc_inst"]); ?> </td>
				<td><?php echo escape($row["ssc_div"]); ?> </td>
				<td><?php echo escape($row["ssc_agg"]); ?> </td>
				<td><?php echo escape($row["im_board"]); ?> </td>
				<td><?php echo escape($row["im_clg"]); ?> </td>
				<td><?php echo escape($row["im_div"]); ?> </td>
				<td><?php echo escape($row["im_agg"]); ?> </td>
				<td><?php echo escape($row["im_passDate"]); ?> </td>
				<td><?php echo escape($row["be_board"]); ?> </td>
				<td><?php echo escape($row["be_clg"]); ?> </td>
				<td><?php echo escape($row["be_div"]); ?> </td>
				<td><?php echo escape($row["be_agg"]); ?> </td>
				<td><?php echo escape($row["be_passDate"]); ?> </td>
				<td><?php echo escape($row["msc_board"]); ?> </td>
				<td><?php echo escape($row["msc_clg"]); ?> </td>
				<td><?php echo escape($row["msc_div"]); ?> </td>
				<td><?php echo escape($row["msc_agg"]); ?> </td>
				<td><?php echo escape($row["msc_passDate"]); ?> </td>
				<td><?php echo escape($row["status"]); ?> </td>
				<td><a href="accept.php?email=<?php echo escape($row["email"]); ?>">Accept</a>/<a href="reject.php?email=<?php echo escape($row["email"]); ?>">Reject</a></td>
				
				
            </tr>
        <?php } ?>
        </tbody>
    </table>
	
    <?php } else { ?>
        
    <?php } 
 ?> 
 
 <?php
 
 
 
 }
  else if($username=="admin" && $pass=="admin"){
	  echo "<script>window.location.href='admin.php';</script>";
	  
  }
 else if($username=="ece" && $pass=="ece"){
	
 
 try  {
        
        require "/config.php";
        require "/common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * 
                        FROM users
                        WHERE department ='ECE' and status='pending'";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }


        

    if ($result && $statement->rowCount() > 0) {
	?>
        <h2>Results</h2>

        <table class="table" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>department</th>
                    <th>caste</th>
                    <th>cat</th>
                    <th>cname</th>
                    <th>fname</th>
                    <th>focc</th>
					<th>mname</th>
					<th>addr</th>
					<th>mobno</th>
					<th>email</th>
					<th>dob</th>
					<th>addr1</th>
					<th>empd</th>
					<th>empd2</th>
					<th>ssc_board</th>
					<th>ssc_inst</th>
					<th>ssc_div</th>
					<th>ssc_agg</th>
					<th>im_board</th>
					<th>im_clg</th>
					<th>im_div</th>
					<th>im_agg</th>
					<th>im_passDate</th>
					<th>be_board</th>
					<th>be_clg</th>
					<th>be_div</th>
					<th>be_agg</th>
					<th>be_passDate</th>
					<th>msc_board</th>
					<th>msc_clg</th>
					<th>msc_div</th>
					<th>msc_agg</th>
					<th>msc_passDate</th>
					<th>Status</th>
					<th>Accept/Reject</th>

                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["department"]); ?></td>
                <td><?php echo escape($row["caste"]); ?></td>
                <td><?php echo escape($row["cat"]); ?></td>
                <td><?php echo escape($row["cname"]); ?></td>
                <td><?php echo escape($row["fname"]); ?></td>
                <td><?php echo escape($row["focc"]); ?> </td>
				<td><?php echo escape($row["mname"]); ?> </td>
				<td><?php echo escape($row["addr"]); ?> </td>
				<td><?php echo escape($row["mobno"]); ?> </td>
				<td><?php echo escape($row["email"]); ?> </td>
				<td><?php echo escape($row["dob"]); ?> </td>
				<td><?php echo escape($row["addr1"]); ?> </td>
				<td><?php echo escape($row["empd"]); ?> </td>
				<td><?php echo escape($row["empd2"]); ?> </td>
				<td><?php echo escape($row["ssc_board"]); ?> </td>
				<td><?php echo escape($row["ssc_inst"]); ?> </td>
				<td><?php echo escape($row["ssc_div"]); ?> </td>
				<td><?php echo escape($row["ssc_agg"]); ?> </td>
				<td><?php echo escape($row["im_board"]); ?> </td>
				<td><?php echo escape($row["im_clg"]); ?> </td>
				<td><?php echo escape($row["im_div"]); ?> </td>
				<td><?php echo escape($row["im_agg"]); ?> </td>
				<td><?php echo escape($row["im_passDate"]); ?> </td>
				<td><?php echo escape($row["be_board"]); ?> </td>
				<td><?php echo escape($row["be_clg"]); ?> </td>
				<td><?php echo escape($row["be_div"]); ?> </td>
				<td><?php echo escape($row["be_agg"]); ?> </td>
				<td><?php echo escape($row["be_passDate"]); ?> </td>
				<td><?php echo escape($row["msc_board"]); ?> </td>
				<td><?php echo escape($row["msc_clg"]); ?> </td>
				<td><?php echo escape($row["msc_div"]); ?> </td>
				<td><?php echo escape($row["msc_agg"]); ?> </td>
				<td><?php echo escape($row["msc_passDate"]); ?> </td>
				<td><?php echo escape($row["status"]); ?> </td>
					<td><a href="accept.php?email=<?php echo escape($row["email"]); ?>">Accept</a>/<a href="reject.php?email=<?php echo escape($row["email"]); ?>">Reject</a></td>
				
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        
    <?php } 
 ?> 
 
 <?php
 
 }
  else if($username=="mech" && $pass=="mech"){
	
 
 try  {
        
        require "/config.php";
        require "/common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * 
                        FROM users
                        WHERE department ='MECH' and status='pending'";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }


        

    if ($result && $statement->rowCount() > 0) {
	?>
        <h2>Results</h2>

        <table class="table" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>department</th>
                    <th>caste</th>
                    <th>cat</th>
                    <th>cname</th>
                    <th>fname</th>
                    <th>focc</th>
					<th>mname</th>
					<th>addr</th>
					<th>mobno</th>
					<th>email</th>
					<th>dob</th>
					<th>addr1</th>
					<th>empd</th>
					<th>empd2</th>
					<th>ssc_board</th>
					<th>ssc_inst</th>
					<th>ssc_div</th>
					<th>ssc_agg</th>
					<th>im_board</th>
					<th>im_clg</th>
					<th>im_div</th>
					<th>im_agg</th>
					<th>im_passDate</th>
					<th>be_board</th>
					<th>be_clg</th>
					<th>be_div</th>
					<th>be_agg</th>
					<th>be_passDate</th>
					<th>msc_board</th>
					<th>msc_clg</th>
					<th>msc_div</th>
					<th>msc_agg</th>
					<th>msc_passDate</th>
					<th>Status</th>
					<th>Accept/Reject</th>

                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["department"]); ?></td>
                <td><?php echo escape($row["caste"]); ?></td>
                <td><?php echo escape($row["cat"]); ?></td>
                <td><?php echo escape($row["cname"]); ?></td>
                <td><?php echo escape($row["fname"]); ?></td>
                <td><?php echo escape($row["focc"]); ?> </td>
				<td><?php echo escape($row["mname"]); ?> </td>
				<td><?php echo escape($row["addr"]); ?> </td>
				<td><?php echo escape($row["mobno"]); ?> </td>
				<td><?php echo escape($row["email"]); ?> </td>
				<td><?php echo escape($row["dob"]); ?> </td>
				<td><?php echo escape($row["addr1"]); ?> </td>
				<td><?php echo escape($row["empd"]); ?> </td>
				<td><?php echo escape($row["empd2"]); ?> </td>
				<td><?php echo escape($row["ssc_board"]); ?> </td>
				<td><?php echo escape($row["ssc_inst"]); ?> </td>
				<td><?php echo escape($row["ssc_div"]); ?> </td>
				<td><?php echo escape($row["ssc_agg"]); ?> </td>
				<td><?php echo escape($row["im_board"]); ?> </td>
				<td><?php echo escape($row["im_clg"]); ?> </td>
				<td><?php echo escape($row["im_div"]); ?> </td>
				<td><?php echo escape($row["im_agg"]); ?> </td>
				<td><?php echo escape($row["im_passDate"]); ?> </td>
				<td><?php echo escape($row["be_board"]); ?> </td>
				<td><?php echo escape($row["be_clg"]); ?> </td>
				<td><?php echo escape($row["be_div"]); ?> </td>
				<td><?php echo escape($row["be_agg"]); ?> </td>
				<td><?php echo escape($row["be_passDate"]); ?> </td>
				<td><?php echo escape($row["msc_board"]); ?> </td>
				<td><?php echo escape($row["msc_clg"]); ?> </td>
				<td><?php echo escape($row["msc_div"]); ?> </td>
				<td><?php echo escape($row["msc_agg"]); ?> </td>
				<td><?php echo escape($row["msc_passDate"]); ?> </td>
				<td><?php echo escape($row["status"]); ?> </td>
				<td><a href="accept.php?email=<?php echo escape($row["email"]); ?>">Accept</a>/<a href="reject.php?email=<?php echo escape($row["email"]); ?>">Reject</a></td>
				
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        
    <?php } 
 ?> 
 
 <?php
 
 }
 else if($username=="eee" && $pass=="eee"){
	
 
 try  {
        
        require "/config.php";
        require "/common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * 
                        FROM users
                        WHERE department ='EEE' and status='pending'";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }


        

    if ($result && $statement->rowCount() > 0) {
	?>
        <h2>Results</h2>

        <table class="table" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>department</th>
                    <th>caste</th>
                    <th>cat</th>
                    <th>cname</th>
                    <th>fname</th>
                    <th>focc</th>
					<th>mname</th>
					<th>addr</th>
					<th>mobno</th>
					<th>email</th>
					<th>dob</th>
					<th>addr1</th>
					<th>empd</th>
					<th>empd2</th>
					<th>ssc_board</th>
					<th>ssc_inst</th>
					<th>ssc_div</th>
					<th>ssc_agg</th>
					<th>im_board</th>
					<th>im_clg</th>
					<th>im_div</th>
					<th>im_agg</th>
					<th>im_passDate</th>
					<th>be_board</th>
					<th>be_clg</th>
					<th>be_div</th>
					<th>be_agg</th>
					<th>be_passDate</th>
					<th>msc_board</th>
					<th>msc_clg</th>
					<th>msc_div</th>
					<th>msc_agg</th>
					<th>msc_passDate</th>
					<th>Status</th>
					<th>Accept/Reject</th>

                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["department"]); ?></td>
                <td><?php echo escape($row["caste"]); ?></td>
                <td><?php echo escape($row["cat"]); ?></td>
                <td><?php echo escape($row["cname"]); ?></td>
                <td><?php echo escape($row["fname"]); ?></td>
                <td><?php echo escape($row["focc"]); ?> </td>
				<td><?php echo escape($row["mname"]); ?> </td>
				<td><?php echo escape($row["addr"]); ?> </td>
				<td><?php echo escape($row["mobno"]); ?> </td>
				<td><?php echo escape($row["email"]); ?> </td>
				<td><?php echo escape($row["dob"]); ?> </td>
				<td><?php echo escape($row["addr1"]); ?> </td>
				<td><?php echo escape($row["empd"]); ?> </td>
				<td><?php echo escape($row["empd2"]); ?> </td>
				<td><?php echo escape($row["ssc_board"]); ?> </td>
				<td><?php echo escape($row["ssc_inst"]); ?> </td>
				<td><?php echo escape($row["ssc_div"]); ?> </td>
				<td><?php echo escape($row["ssc_agg"]); ?> </td>
				<td><?php echo escape($row["im_board"]); ?> </td>
				<td><?php echo escape($row["im_clg"]); ?> </td>
				<td><?php echo escape($row["im_div"]); ?> </td>
				<td><?php echo escape($row["im_agg"]); ?> </td>
				<td><?php echo escape($row["im_passDate"]); ?> </td>
				<td><?php echo escape($row["be_board"]); ?> </td>
				<td><?php echo escape($row["be_clg"]); ?> </td>
				<td><?php echo escape($row["be_div"]); ?> </td>
				<td><?php echo escape($row["be_agg"]); ?> </td>
				<td><?php echo escape($row["be_passDate"]); ?> </td>
				<td><?php echo escape($row["msc_board"]); ?> </td>
				<td><?php echo escape($row["msc_clg"]); ?> </td>
				<td><?php echo escape($row["msc_div"]); ?> </td>
				<td><?php echo escape($row["msc_agg"]); ?> </td>
				<td><?php echo escape($row["msc_passDate"]); ?> </td>
				<td><?php echo escape($row["status"]); ?> </td>
				<td><a href="accept.php?email=<?php echo escape($row["email"]); ?>">Accept</a>/<a href="reject.php?email=<?php echo escape($row["email"]); ?>">Reject</a></td>
				
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        
    <?php } 
 ?> 
 
 <?php
 
 }

 else{
 echo "<script>window.location.href='index.php';</script>";
 }
 
 

?>
<link rel="stylesheet" href="css/bootstrap.css" />
<script src= "tables/js/jquery.js"></script>
<script src= "tables/js/jquery.dataTables.js"></script>
<script src= "tables/js/dataTables.bootstrap.js"></script>
<script>
	$(".table").DataTable();
</script>