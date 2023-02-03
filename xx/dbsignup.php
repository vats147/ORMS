<?php
	// session_start()
?>
<?php
// die("here we go");
    include "dbfile.php";
    if(isset($_POST['signup']))
    {
        $name =$_POST['name'];
        $mail =$_POST['newmail'];
        $pwd =$_POST['newpwd'];
        // $hash=md5($pwd);
        $hash=password_hash($pwd,PASSWORD_DEFAULT);
   
        date_default_timezone_set('Asia/Kolkata');
           
        $date= date("Y-m-d H:i:s");
        $sql="INSERT INTO `tbluser`(`role`, `name`, `emailid`, `password`, `status`, `datetime`) 
        VALUES ('0','$name', '$mail', '$hash', 'true','$date' )";
        $result = mysqli_query($conn, $sql);
        // Sql query to be executed
        $sql = "INSERT INTO `user` (`username`, `usermail`, `userpwd`) VALUES ('$name', '$mail', '$hash')";
        $result = mysqli_query($conn, $sql);
        // header("Location:Login.php");
    
        // Add a new trip to the Trip table in the database
        header("Location:Login.php");
        if($result){
            // echo "The record has been inserted successfully successfully!<br>";
            $_POST['name']=null;
            $_POST['newmail']=null;
            $_POST['newpwd']=null;
        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        }
    
    }

    mysqli_close($conn);
?>

<?php
// die("here we go");
echo "\working\.";
  
    if(isset($_POST['signup']))
    {
        echo "\signup working\.";
        $cmail=$_POST['newmail'];
        $sql="SELECT * FROM `tbluser`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)
        {
            echo "\data working\.";
            while($row = mysqli_fetch_assoc($result))
            {
                if($cmail==$row['emailid'])
                {
					$errPwd="\already exits\.";
                    $flg=1;
                   ?><script> alert("This mail already exists."); </script><?php
                }
				else
                {
                //    pro();
                }
            }
            if($flg==0)
            {
                pro();
            }
            else
            {
                header("Location:register.php");
            }
        
        }
        else
        pro();
    }
    ?>



