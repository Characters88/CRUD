<?php 
include('connection.php');

$con = mysqli_connect($host, $master_name, $master_password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_POST['id'];
$sql = "DELETE FROM users WHERE id='$user_id'";
$delQuery = mysqli_query($con, $sql);

if ($delQuery == true) {
    $data = array('status' => 'success');
    echo json_encode($data);
} else {
    $data = array('status' => 'failed');
    echo json_encode($data);
}

mysqli_close($con);
?>
