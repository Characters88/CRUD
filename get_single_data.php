<?php 
include('connection.php');

$con = mysqli_connect($host, $master_name, $master_password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$sql = "SELECT * FROM users WHERE id='$id' LIMIT 1";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

echo json_encode($row);
mysqli_close($con);
?>
