<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="alumni";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['name'];
$pass=$_POST['pass'];
$sql="SELECT * from students Where U_ID = '$user'";
$get=$conn->query($sql);
if($get!==false && $get->num_rows>0)
{
	$final=$get->fetch_assoc();
}
else{
	$sql="select * from faculty where U_ID = '$user'";
	$get=$conn->query($sql);
	if($get!==false && $get->num_rows>0)
	{
		$final=$get->fetch_assoc();
	}
	else{
		die("No User Found! Please Register Yourself.");
	}
}
if($final['pass']==$pass)
{
  setcookie("table",$final['register'],time()+(86400*30),"/");
  setcookie("u_id",$final['U_ID'],time()+(86400*30),"/");
	?>
	<div class="container bootstrap snippet">
  <div class="row">
  	<div class="col-sm-10" >
      <h1>Welcome, <?php echo $final['f_name'] ?></h1>
    </div>
  </div>
  <form class="form" action="change.php" method="POST" enctype="multipart/form-data" id="registrationForm">
    <div class="row">
  	 <div class="col-sm-3">
       <div class="text-center"><?php
          echo '<img src="data:image/jpeg;base64,'.base64_encode($final['pic']).'" class="avatar img-circle " height="200" alt="avatar">';
          ?>
          <h6>Upload a different photo...</h6>
          <input type="file" name="pic" class="text-center center-block file-upload">
        </div>
        </hr><br>
        <div class="panel panel-default">
          <div class="panel-heading">ABOUT</div>
          <div class="panel-body form-group">
        	 <textarea style="resize: none;" name="description" class="form-control"><?php echo $final['description']; ?></textarea>
          </div>
        </div>
      </div><!--/col-3-->
      <div class="col-sm-9">
        <div class="tab-content">
          <div class="tab-pane active" id="home">
                      <hr>
            <div class="form-group">
              <div class="col-xs-6">
                <label for="first_name"><h4>First name</h4></label>
                <input type="text" value="<?php echo $final['f_name']; ?>" class="form-control" name="f_name" id="first_name" placeholder="first name" title="enter your first name if any.">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6">
                <label for="first_name"><h4>Middle name</h4></label>
                <input type="text" value="<?php echo $final['m_name']; ?>" class="form-control" name="m_name" id="first_name" placeholder="middle name" title="enter your middle name if any.">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6">
                <label for="last_name"><h4>Last name</h4></label>
                <input type="text" value="<?php echo $final['l_name']; ?>" class="form-control" name="l_name" id="last_name" placeholder="last name" title="enter your last name if any.">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6">
                <label for="phone"><h4>Phone</h4></label>
                <input type="text" value="<?php echo $final['contact']; ?>" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6">
                <label for="email"><h4>Email</h4></label>
                <input type="email" class="form-control" value="<?php echo $final['email']; ?>" name="email" id="email" placeholder="you@email.com" title="enter your email.">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6">
                <label for="email"><h4>University ID</h4></label>
                <input type="text" class="form-control" name="U_ID" id="location" value="<?php echo $final['U_ID']; ?>" disabled placeholder="somewhere" title="enter a location">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">          <br>
                <button class="btn btn-lg btn-success" name="check" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
              </div>
            </div>
        	  <hr>  
          </div><!--/tab-pane-->
        </div><!--/tab-content-->
      </div><!--/col-9-->
    </div><!--/row-->
  </form>
</div><?php                              
}
else{
	die("Password dont match your username please re login.");
}
?>