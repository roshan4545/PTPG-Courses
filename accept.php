<?php


session_start();
$email=$_GET['email'];


//echo "<h2>" . $email . "</h2>";
require "/config.php";
require "/common.php";
if (isset($_GET['email'])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);
   // $email = $_GET['email'];
   $sqll="update users set status='accepted' where email='$email'";
   // $sql = "SELECT * FROM users WHERE email = :email";
    $statement = $connection->prepare($sqll);
  //  $statement->bindValue(':Accepted', $status);
    $statement->execute();
    
   // $user = $statement->fetch(PDO::FETCH_ASSOC);
  } catch(PDOException $error) {
     // echo $sqll . "<br>" . $error->getMessage();
  }
} else {
    echo "Something went wrong!";
    exit;
}
?>
