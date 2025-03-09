<?php
include "db_connect.php"; 
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM animals WHERE id = $id");
$animal = $result->fetch_assoc();

echo json_encode($animal);
?>
