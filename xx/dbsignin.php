<?php
 echo $_REQUEST['mail'];
    session_start();
    if(isset($_SESSION['mail']))
    {
        header("Location:400.html");
    }
    else
    {
        echo "It is success";
    }
?>


<!-- hello -->
<?php
    session_start();
    if(isset($_SESSION['mail']))
    {
        header("Location:405.html");
    }
?>
<?php
$var="undefined";
    include "dbfile.php";
    if(isset($_SESSION['mail']))
    {
        $var="already sign in";
         header("Location:../temp.php");
    }

    if(isset($_POST['signin']))
    {
        if(isset($_POST['mail']))
        {
            if(isset($_POST['pwd']))
            {
                $mail1 =$_POST['mail'];
                $pwd2 =$_POST['pwd'];
                $hash1 = md5($pwd2); 
                $sql1 = "SELECT `usermail`, `userpwd` FROM `tbluser`";
                $result1 = mysqli_query($conn, $sql1);
                echo $pwd2;
                echo "<br>".$hash1."<br>";
                if (mysqli_num_rows($result1) > 0)
                {
                    // echo "sign in successfull <br>";
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result1))
                    {
                        if($mail1==$row["usermail"] && $hash1==$row["userpwd"])
                        {
                            $_SESSION['mail']=$mail1;
                            Header("Location:index.php");
                            $var="Success sign in";
                        }
                    }
                }
                else
                {
                // echo "0 results";
                }
            }
            else
            {
                // echo "failed";
            }
            
        }
    }
    else
    {
        echo '<div class="alert alert-warning" role="alert">
        Please fill all information
      </div>';
    }
    echo '<div class="alert alert-warning" role="alert">';
    echo $var;
    echo '</div>';
    mysqli_close($conn);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="alert alert-warning" role="alert">
  <?php 
    echo $var;
  ?>
    </div>
</body>
</html>
