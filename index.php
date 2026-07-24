<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Status System</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

<h1>Student Status System</h1>

<form id="studentForm">

<input
type="text"
id="name"
placeholder="Enter Name"
required
>

<input
type="number"
id="age"
placeholder="Enter Age"
required
>

<button type="submit">
Submit
</button>

</form>

<table>

<thead>

<tr>

<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>

</tr>

</thead>

<tbody id="tableBody">

</tbody>

</table>

</div>

<script src="script.js"></script>

</body>
</html>