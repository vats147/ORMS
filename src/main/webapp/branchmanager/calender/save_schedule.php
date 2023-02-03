<?php 
require_once('db-connect.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('../calendar.php') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $check = 0;
    
        // i want to validate if title not contain any whitespace with FILTER_VALIDATE_REGXP
        if (!preg_match("/^[a-zA-Z]*$/",$title)) {
            echo "<script> alert('Error: Title is required. and it should not contain whitespace'); location.replace('../calendar.php') </script>";
            $conn->close();
            $check = 1;

            exit;
        }
    
    if(empty($description))
    {
        echo "<script> alert('Error: Start date is required.'); location.replace('../calendar.php') </script>";
        $conn->close();
    $check = 1;

        exit;
    }
   
    // $date_now = date("Y-m-d");
    $date_now = date('m/d/Y h:i:s ');
    if (!($start_datetime >= $date_now)) {
        echo $start_datetime;
        echo $date_now;
        // $validate = true;


        echo "<script> alert('Error: Start date is Not previous.'); location.replace('../calendar.php') </script>";
        $conn->close();
        $check = 1;
    }
    
    // $date_now = date('m/d/Y h:i:s ');
    if (!($start_datetime >= $end_Datetime)) {
        // $validate = true;


       
        echo "<script> alert('Error: End date is required.'); location.replace('../calendar.php') </script>";
        $conn->close();
        $check = 1;

    }

    // $start_date = $_POST['start_date'];
    // $end_date = $_POST['end_date'];
    $start_date = strtotime($start_datetime);
    $end_date = strtotime($end_datetime);
    // $today = strtotime(date('Y-m-d'));
    $today = strtotime(date('Y-m-d H:i:s'));

    if($start_date <=$today)
    {
        echo "<script> alert('Error: Start date is not older than today'); location.replace('../calendar.php') </script>";
        
        $check = 1;
    }
    else
    {
        // $date = $start_date;
    }


    // create a validation in php which if date and time should not be less than current time and date
    if($end_date>=$start_date)
    {
        $check = 0;

    }
    else
    {
        echo "<script> alert('Error: End  date &time is not older than today or Start Date'); location.replace('../calendar.php') </script>";

    }


    if ($check == 0) {
        $sql = "INSERT INTO `schedule_list` (`title`,`description`,`start_datetime`,`end_datetime`,`c_name`,`c_number`) VALUES ('$title','$description','$start_datetime','$end_datetime','$Customer','$Contact')";
    }
}else{
    $check = 0;
    if (filter_var($title, FILTER_VALIDATE_REGEXP, '^[a-zA-Z]$')) {
        echo "<script> alert('Error: Titleee is required. and it should not contain whitespace'); location.replace('../calendar.php') </script>";
        $conn->close();
        $check = 1;

        exit;
    }
    if ($check == 0) {
        $sql = "UPDATE `schedule_list` set `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}',`c_name`='{$Customer}',`c_number`='{$Contact}' where `id` = '{$id}'";
    }
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('../calendar.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>