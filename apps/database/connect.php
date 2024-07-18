<?php
//establishing a connection  to our database
$host = 'localhost';
$user = 'root';
$pass ='';
$db_name = 'blog';
$conn = new MySQLi($host, $user, $pass, $db_name);
//checks if there is a database connection error and returns it
if ($conn->connect_error){
    die('Error connecting to blog database' . $conn->connect_error);
}
else{
    // echo 'Database connection established';
}
?>