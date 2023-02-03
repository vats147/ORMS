<?php
$first_name=$_POST["fname"];
$last_name=$_POST["lname"];

$host = "localhost";
$username = "root";
$password = "";
$database = "rms";

$conn = new mysqli($host, $username, $password, $database);

if(!$conn){
    echo "Database connection failed. Error:".$conn->error;
    exit;
}
$sql="insert into tbluser(name) VALUES('{$first_name}');";
$result = $conn->query($sql);
// echo $sql;
if($result)
{
    echo 1;
}
else
{
    echo 0;
}
// $result = $conn->query($sql) or die('sql query fail');

?>