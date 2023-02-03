<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "Practice";

// $conn = mysqli_connect($servername, $username, $password, $database);

// if($conn)
// {
//     echo "connected successfull";
// }
// else
// {
//     echo "not Connected";
// }

?>
<?php
//check the field is empty or not
if (isset($_POST['submit']) && isset($_POST['pname']) && isset($_POST['contact']) && isset($_POST['mail']) && isset($_POST['gender']) && isset($_POST['city']) && isset($_POST['hobbies']) && isset($_POST['aboutyou']) && isset($_POST['pwd'])) {
    $name = $_POST['pname'];
    $contact = $_POST['contact'];
    $email = $_POST['mail'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $city1 = implode(",", $city);
    $hobbies = $_POST['hobbies'];
    $hobbies= implode(",", $hobbies);
    $about = ltrim(rtrim($_POST['aboutyou']));//this will remove spaces at front and at the end of the string
    $pwd = $_POST['pwd'];

    //validation check one by one
    if (!preg_match("/^[A-Za-z][A-Za-z-\s]+$/", $name)) {
        echo ("<br>invalid name");
    }
    if (!preg_match("/^[0-9]{10}$/", $contact)) {
        echo ("<br>invalid contact");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("<br>invalid email address");
    }
    // if (!preg_match("/^[A-Za-z0-9]{8,}$/", $pwd)) {
    //     echo ("<br>invalid password");
    // }
    
    //password validation
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
        echo "<br> Invalid Password";
    } 
} else {
    echo "fill details properly";
}
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
    <hr>
    <form action="" method="POST">
        Name : <input type="text" name="pname"><br><br>
        Contact : <input type="tel" name="contact"><br><br>
        Email : <input type="email" name="mail"><br><br>
        Gender : <br><br>
        <input type="radio" name="gender" value="male">Male<br><br>
        <input type="radio" name="gender" value="female">Female<br><br>
        City : <br><br>
        <select name="city[]" multiple>
            <option value="suart">Surat</option>
            <option value="mumbai">Mumbai</option>
            <option value="valsad">Valsad</option>
        </select><br><br>
        Hobbies : <br><br>
        <input type="checkbox" name="hobbies[]" value="music">Music<br><br>
        <input type="checkbox" name="hobbies[]" value="dance">Dance<br><br>
        <input type="checkbox" name="hobbies[]" value="draw">Draw<br><br>
        About : <br><br>
        <textarea name="aboutyou" cols="30" rows="10"></textarea><br><br>
        Password : <input type="password" name="pwd"><br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
</body>

</html>