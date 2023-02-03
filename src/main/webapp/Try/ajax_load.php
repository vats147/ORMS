<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "rms";

$conn = new mysqli($host, $username, $password, $database);

if(!$conn){
    echo "Database connection failed. Error:".$conn->error;
    exit;
}
$sql="select * from tbluser";
$result = $conn->query($sql);
$output="";
if(mysqli_num_rows($result)>0)
{
    $output='<table border="1" width="100%">
    <tr>
    <th>ID</th>
    <th>Code</th>
    <th>Delete</th>

    <tr>';
    
    while($row=mysqli_fetch_array($result))
    {
        $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";

    }
    $output .="</table>";
    echo $output;
}


?>