<?php
session_start();
echo isset($_SESSION['username']) ? json_encode(["loggedIn" => true, "user" => $_SESSION['username']]) : json_encode(["loggedIn" => false]);
?>
