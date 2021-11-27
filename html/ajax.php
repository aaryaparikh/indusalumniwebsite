<script >
    function pass(roll)
    {
        document.cookie="roll="+roll;
    }
</script>
<?php
$conn = new mysqli("localhost", "root", "","alumni");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['search'])) {
    $Name = $_POST['search'];
    $Query = "SELECT * FROM students WHERE (f_name LIKE '%$Name%' or l_name like '%$Name%' or m_name like '%$Name%')";
    $ExecQuery = $conn->query($Query);
    ?><form method="POST"><?php
    while ($Result=$ExecQuery->fetch_assoc()){
        ?>
        <button type="submit" onclick="pass('<?php echo $Result['U_ID']; ?>')" class="list-group-item list-group-item-action border-1"><?php echo $Result['f_name']." " .$Result['m_name']." ".$Result['l_name']; ?></button>
        <?php
    }
    $sql= "SELECT * from faculty where (f_name like '%$Name%' or m_name like '%$Name%' or l_name like '%$Name%')";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        ?>
        <button type="submit" onclick="pass('<?php echo $row['U_ID']; ?>')" class="list-group-item list-group-item-action border-1 "><?php echo $row['f_name']." ".$row['m_name']." ".$row['l_name']; ?></button>
        <?php
    }?>
    </form><?php
}
?>
