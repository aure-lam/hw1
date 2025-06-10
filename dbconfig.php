<?php
$conn = new mysqli("localhost", "root", "", "airup_db");
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>
