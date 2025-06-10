<?php
require 'dbconfig.php';
$username = $_GET["username"];

$stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

echo json_encode(["exists" => $stmt->num_rows > 0]);
?>
