<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="alumni";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
$register=$_COOKIE['table'];
$fname=$_POST['f_name'];
$mname=$_POST['m_name'];
$lname=$_POST['l_name'];
$contact=$_POST['phone'];
$email=$_POST['email'];
$description=$_POST['description'];
$uid=$_COOKIE['u_id'];
if($_FILES['pic']['tmp_name']!=NULL)
{
	$pic=addslashes(file_get_contents($_FILES['pic']['tmp_name']));

$sql="UPDATE `$register` 
	SET 
	f_name='$fname', 
	m_name='$mname', 
	l_name='$lname', 
	contact='$contact', 
	email='$email',
	pic='$pic', 
	description='$description' 
	WHERE U_ID= '$uid' LIMIT 1";
}
else{
$sql="UPDATE `$register` 
	SET 
	f_name='$fname', 
	m_name='$mname', 
	l_name='$lname', 
	contact='$contact', 
	email='$email',
	description='$description' 
	WHERE U_ID= '$uid' LIMIT 1";

}

if($conn->query($sql)===True)
{
	echo "Records Updated Please Log in again.<br> Redirecting to login page";
	sleep(3);
	header("location: login.html");
}
else{
	echo "Error " .$sql. "<br> ".$conn->error;
}

?>