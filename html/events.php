<style>
  *{
    padding: 0;
    margin: 0;
  }
</style>
<meta charset="utf-8" />

    <link rel="icon" href="https://indusuni.ac.in/wp-content/uploads/2020/08/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="theme-color" content="#000000" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body style=" background-color:lightblue;">
<div >
  <div class="page-header">
    <h1 align="center">JOBS</h1>      
  </div>
<div style="margin-left:10px ;" class="row row-cols-1 row-cols-md-3 g-4">
<?php  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="alumni";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  $sql="Select * from events";
  $result=$conn->query($sql);
  $flag=0;
  while($row=$result->fetch_assoc())
  {
    ?>
    <div class="card" style="margin-top: 20px; margin-left: 20px; width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['event_name'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['event_organizer'] ?></h6>
        <p class="card-text"><?php echo $row['event_description'] ?></p>
        <small>Contact: <?php echo $row['contact'] ?></small>
      </div>
    </div>

    <?php
    $flag=1;
  }
  if($flag==0)
  {
    echo "<h1>Sorry no jobs Posted</h1>";
  }
?>
</div>
</div>
</body>