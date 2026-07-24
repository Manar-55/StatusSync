<?php

$host = "sql307.infinityfree.com";
$user = "if0_42489850";
$password = "mano13579";
$database = "if0_42489850_student_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>