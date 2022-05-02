<?php

$host = 'localhost';
$user = 'expressmedgh_qhobbygraves';
$pass = 'God..!!22rmeodesaint';
$db_name = 'expressmedgh_blog';


$conn = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_error()) {
    die('Error connecting to database : ' . mysqli_connect_error());
}