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
$sql="Insert into events values('".$_POST['name']."','".$_POST['organizer']."','".$_POST['description']."','".$imagetmp."','".$imagename."')";
if ($conn->query($sql)===TRUE) {
  echo "event stored successfully";
}
else {
  echo "Error".$sql."<br>".$conn->error;
}
?>
