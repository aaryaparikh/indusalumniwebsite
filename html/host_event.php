<?php
$servername="localhost";
$username="root";
$password="";
$dbname="alumni";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die("Connection failed");
}
$sql="Insert into events(event_name,event_organizer,event_description,contact) values('".$_POST['name']."','".$_POST['organizer']."','".$_POST['description']."','".$_POST['contact']."')";
if ($conn->query($sql)===TRUE) {
  echo "Job Posted successfully";
}
else {
  echo "Error".$sql."<br>".$conn->error;
}
?>
