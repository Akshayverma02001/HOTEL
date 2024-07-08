<?php

include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $room = $_POST['room'];
    $adults = $_POST['adults'] ?? "1";
    $kids = $_POST['kids'] ?? "0";
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $breakfast = $_POST['breakfast'] ?? "No";
    $lunch = $_POST['lunch'] ?? "No";
    $dinner = $_POST['dinner'] ?? "No";
    $comment = $_POST['comment'];
}

$sql = "INSERT INTO `bookings`(`id`, `name`, `phone`, `email`, `room`, `adults`, `kids`, `checkin`, `checkout`, `breakfast`, `lunch`, `dinner`, `comments`) VALUES ('', '$name','$phone','$email','$room','$adults','$kids','$checkin','$checkout','$breakfast','$lunch','$dinner', '$comment')";

$res = mysqli_query($conn, $sql);

if ($res) {
    header("Location: thanks.php");
} else {
    die("Error => " . mysqli_error($conn));
}

echo "<pre>";
print_r($_POST);
echo "</pre>";



?>