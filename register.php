<?php
require 'dbconfig.php';

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    exit;
}

$username = $conn->real_escape_string($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Check existing
$check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();
if ($check->num_rows > 0) {
    echo "Username già in uso.";
    exit;
}

// Register
$stmt = $conn->prepare("INSERT INTO users(username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

session_start();
$_SESSION["username"] = $username;

header("Location: index.php");
?>
