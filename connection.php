<?php
$host = 'webapplication-db.cn5j2lyaso8f.us-east-1.rds.amazonaws.com';
$master_name = 'main';
$master_password = 'WebApplication-password';
$database = 'users_db';

$con = mysqli_connect($host, $master_name, $master_password, $database);

if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    exit();
}

// $mysql_command = "mysql -u $master_name -p$master_password -h $host $database < users_db.sql";

// exec($mysql_command, $output, $return_var);

// if ($return_var !== 0) {
//     echo "Error executing the SQL script. Please check the script and try again.";
// } else {
//     echo "SQL script executed successfully.";
// }

mysqli_close($con);
?>
