<?php
$apiKey = "YOUR_API_KEY"; // Inserisci la tua chiave OpenWeather
$city = "Milan";

$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric&lang=it";
$response = file_get_contents($url);
echo $response;
?>
