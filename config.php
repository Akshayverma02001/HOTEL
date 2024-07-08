<?php

$db_host = 'localhost';
$db_name = 'hotel';
$db_user = 'root';
$db_pass = '';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS `bookings` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` VARCHAR(50) NULL ,
    `phone` VARCHAR(50) NULL ,
    `email` VARCHAR(50) NULL ,
    `room` VARCHAR(50) NULL ,
    `adults` INT NULL ,
    `kids` INT NULL ,
    `checkin` VARCHAR(10) NULL ,
    `checkout` VARCHAR(10) NULL ,
    `breakfast` VARCHAR(10) NULL ,
    `lunch` VARCHAR(10) NULL ,
    `dinner` VARCHAR(10) NULL ,
    `comments` TEXT NULL
    ); ";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die("Error => " . mysqli_error($conn));
}







?>