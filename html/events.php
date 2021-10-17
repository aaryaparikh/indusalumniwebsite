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
<div style=" background-color:lightblue;">
  <div class="page-header">
    <h1 align="center">EVENTS</h1>      
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
  while($row=$result->fetch_assoc())
  {
    $image_path=$row["event_image"];
    echo "<div class='col '>";
    echo "<div class='card'style='background-color: #ffa700'>
            <img height='400'src=data:image/jpeg;base64,".base64_encode($image_path).">";  
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>".$row["event_name"]."</h5>";
    echo "<p class='card-text'>".$row["event_description"]."</p>";
    echo "</div>
    </div>
  </div>";
  }
?>
</div>
</div>