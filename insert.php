<?php

include "db.php";

if(isset($_POST["name"]) && isset($_POST["age"])){

$name=$_POST["name"];
$age=$_POST["age"];

$sql="INSERT INTO students(name,age) VALUES('$name','$age')";

$conn->query($sql);

}

?>