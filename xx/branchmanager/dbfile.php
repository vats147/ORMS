<?php
    // echo "Welcome to Database !!!";
    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rms";
    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //Die if connection was not successful
    if (!$conn)
    {
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else
    {
        // echo "Connection was successful<br>";
    }

?>
