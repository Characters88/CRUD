<?php 
include('connection.php');

$con = mysqli_connect($host, $master_name, $master_password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];

$sql = "INSERT INTO `users` (`username`,`email`,`mobile`,`city`) VALUES ('$username', '$email', '$mobile', '$city')";
$query = mysqli_query($con, $sql);
$lastId = mysqli_insert_id($con);

if ($query == true) {
    $data = array('status' => 'true');
    echo json_encode($data);
} else {
    $data = array('status' => 'false');
    echo json_encode($data);
}

mysqli_close($con);
?>
