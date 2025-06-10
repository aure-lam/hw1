<?php
require 'dbconfig.php';
session_start();

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hash);

if ($stmt->num_rows > 0) {
    $stmt->fetch();
    if (password_verify($password, $hash)) {
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit;
    }
}
echo "Credenziali non valide.";
?>
