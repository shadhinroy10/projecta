<?php

$servername = "localhost";
$username = "root";
$password = "";
$datatable= "projecta";

$conn = new mysqli($servername,$username,$password,$datatable);

if ( $conn->connect_error)
    die("error");


?>
