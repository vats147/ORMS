<form method="post">
    <input type="datetime-local" name="start_date">
    <input type="datetime-local" name="end_date">
    <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $start_date = strtotime($start_date);
    $end_date = strtotime($end_date);
    $today = strtotime(date('Y-m-d'));
    if($start_date < $today)
    {
        echo "Start Date is older than today";
    }
    else
    {
        $date = $start_date;
        while($date <= $end_date)
        {
            echo date('Y-m-d H:i:s',$date)."<br>";
            $date = strtotime("+1 day", $date);
        }
    }
}
?>

<!-- write a php code which check start date is not be older than current date and time -->