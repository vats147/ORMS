<?php

// echo $_GET['id'];
// echo $_GET['dbname'];

$num=$_GET['id'];
$dbbname=$_GET['dbname'];
include 'dbfile.php';
// echo "delete from `$dbname` where branchcode='$num'";
$sql="delete from `$dbbname` where branchcode='$num'";
		$result = mysqli_query($conn, $sql);
      
		if(!$result)
		{
			echo "\n error";
            
            echo "Hello World";
		
		}
        else
        {
            echo "Deleted";
        }
    
?>