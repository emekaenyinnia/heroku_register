<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection){
die("connection failed:".mysqli_connect_error());
}

$login = false;

if (isset($_POST['submit'])) {
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $username = htmlspecialchars($_POST['username']);
  $city = htmlspecialchars($_POST['city']);
  $state = htmlspecialchars($_POST['state']);

 $sql = " INSERT INTO form ( firstname, lastname, username, city, state ) VALUES ('$firstname', 
 '$lastname', '$username', '$city', '$state')";
 
 $conn = mysqli_query($connection , $sql);

 if(!$conn){
     die('ERROR'. mysqli_error($conn));
 }
 
 $message =  "your account have been registered successfully";

};
?>

