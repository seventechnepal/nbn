<?php

$host = 'nabinpdl.mysql.database.azure.com';
$username = 'nabin@nabinpdl';
$password = 'I@mN@binpoudel';
$db_name = 'nabinpdl';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name);

?>
