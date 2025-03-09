<?php
include "db_connect.php";

$result = $conn->query("SELECT * FROM animals");
$animals = [];
while ($row = $result->fetch_assoc()) {
    $animals[] = $row;
}

echo json_encode($animals);
?>
