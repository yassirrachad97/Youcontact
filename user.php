<?php require("header.php");
require_once ('connect.php');
$query = "SELECT * FROM utlisateur";
$result = $conn->query($query);

 ?>