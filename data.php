<?php

$code = filter_input(INPUT_POST, 'random_code');
$name = filter_input(INPUT_POST, 'booking_name');
$email = filter_input(INPUT_POST, 'booking_email');
$phone = filter_input(INPUT_POST, 'booking_phone');
$checkin = filter_input(INPUT_POST, 'checkindate');
$checkout = filter_input(INPUT_POST, 'checkoutdate');
$adult = filter_input(INPUT_POST, 'adult');
$child = filter_input(INPUT_POST, 'child');
$adult =(int)$adult;
$child =(int)$child;

$host = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// create connect
$conn = new mysqli ($host, $username, $password, $dbname);
if (mysqli_connect_error()){
    die('Connection ('. mysqli_connect_errno() .')'
    . mysqli_connect_error());
}else{
    $sql = "INSERT INTO `database` (`Code`, `Name_for_booking`, `E-mail`, `Phone`, `Date_Check_In`, `Date_Check_Out`, `Adult`, `Child`) 
    VALUES ('$code', '$name', '$email', '$phone', '$checkin', '$checkout', $adult, $child)";
    if ($conn->query($sql)){
        header("Location: http://localhost/project/web/index.html");
    }else{
        echo "Error ". $sql ."<br>". $conn->error;
    }
$conn->close();
}
?>