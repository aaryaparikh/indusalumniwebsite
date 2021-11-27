<?php
$servername="localhost";
$username="root";
$password="";
$dbname="alumni";
$conn=new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("Connection failed");
  }

$imagename=$_FILES['image']['name'];
$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));
$sql="insert into news values('".$_POST["name"]."','".$_POST["description"]."','".$imagetmp."')";

if ($conn->query($sql)===TRUE) {
  echo "News Added successfully";
}
else {
  echo "Error".$sql."<br>".$conn->error;
}


 ?>
