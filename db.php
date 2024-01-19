<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tranningwithbt";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `locations` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:location.php');  
      }else{  
           echo "not deleted: ".mysqli_error($conn);  
      }  
 }*/ 
?>
