<!-- write code for table which have 4 column and 3 row in html -->
<!-- write code for table which have 4 column and 3 row in html -->
<?php

if(isset($_POST["id"])){
if($_POST["id"]==1){
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

}
}


?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
        <label>First Name</label>
        <input type="text" name="fname" id="fname">
        
        <label>Last Name</label>
        <input type="text" name="lname" id="lname">
        <button id="data" type="submit">Submit</button>
    <br>
    <br>

    <button id="show-data">Load Data</button>
    <table  id="table-data"  border="1" width="100%">
        <tr>
        <th>PromoId</th>
        <th> PromoCode</th>
        </tr>    
        <tr>
        <td>1</td>
        <td> 123</td>
        </tr>
    </table>

    
</body>
</html>


<script>
    $(document).ready(function(){
        $("#show-data").on("click",function(e){
            console.log("Cliked");
            $.ajax({
                url: "ajaxyoutube.php",
                type: "POST",
                data:{id:1},
                success: function(data){
                    // console.log(data);
                    $("#table-data").html(data);
                }
            });
        });
    });

    
 



</script>
