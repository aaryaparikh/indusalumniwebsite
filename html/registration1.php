<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname="alumni";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully by".$username;


//$last_name = $_POST['pass'];

//$first_name = $_POST['uname'];


//echo $last_name."".$first_name;
if($_POST['register_as']=='student')
{
    $sql = "INSERT INTO students (f_name,m_name,l_name,email ,contact,register,degree,department,graduation,U_ID,pass) VALUES ('".$_POST['fname']."', '".$_POST['mname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['register_as']."','".$_POST['degree']."','".$_POST['department']."','".$_POST['graduation']."','".$_POST['u_id']."','".$_POST['pass']."')";
}
else
{
    $sql = "INSERT INTO faculty (fname,mname,lname,email ,contact,register_as,qualification,department,u_id,pass) VALUES ('".$_POST['fname']."', '".$_POST['mname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['register_as']."','".$_POST['qualification']."','".$_POST['department1']."','".$_POST['u_id']."','".$_POST['pass']."')";
}
if ($conn->query($sql) === TRUE) {
    header('Location:../index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>