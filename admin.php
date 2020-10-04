<?php
	
        require "/config.php";
        require "/common.php";

 
 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

?>


<html>
<body>
Total No Of Applications<input type = "text" readonly value="<?php echo $empcount;?>"> <br>
<?php 
 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where status='accepted'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount1 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

?>

<br>
Total No Of Applications Accepted <input type = "text" readonly value="<?php echo $empcount1;?>"> <br>
<?php
 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where status='rejected'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount2 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications Rejected<input type = "text" readonly value="<?php echo $empcount2;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='OC'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount3 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications OC<input type = "text" readonly value="<?php echo $empcount3;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='BC-A'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount4 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications BC-A<input type = "text" readonly value="<?php echo $empcount4;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='BC-B'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount5 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications BC-B<input type = "text" readonly value="<?php echo $empcount5;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='BC-C'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount6 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications BC-C<input type = "text" readonly value="<?php echo $empcount6;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='BC-D'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount7 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications BC-D<input type = "text" readonly value="<?php echo $empcount7;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='BC-E'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount8 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications BC-E<input type = "text" readonly value="<?php echo $empcount8;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='ST'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount9 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications ST<input type = "text" readonly value="<?php echo $empcount9;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where caste='SC'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount10 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications SC<input type = "text" readonly value="<?php echo $empcount10;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where department='CSE'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount11 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications CSE<input type = "text" readonly value="<?php echo $empcount11;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where department='ECE'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount12 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications ECE<input type = "text" readonly value="<?php echo $empcount12;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where department='EEE'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount13 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications EEE<input type = "text" readonly value="<?php echo $empcount13;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where department='MECH'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount14 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications MECH<input type = "text" readonly value="<?php echo $empcount14;?>"> <br>
<?php

 try  {
        
        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT count(*) 
                        FROM users where department='CIVIL'
                        ";

        

        $statement = $connection->prepare($sql);
        
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_NUM);
		
		$empcount15 = $result[0];
		
		
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?><br>
Total No Of Applications CIVIL<input type = "text" readonly value="<?php echo $empcount15;?>"> <br>
<?php
?><br>
<link rel="stylesheet" href="css/bootstrap.css" />
<script src= "tables/js/jquery.js"></script>
<script src= "tables/js/jquery.dataTables.js"></script>
<script src= "tables/js/dataTables.bootstrap.js"></script>
<script>
	$(".table").DataTable();
</script>
</body>
</html>
