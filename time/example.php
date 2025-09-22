<?php
require_once __DIR__ . '/../config.php';

// Пример даты
$year = 1975; // от -13000000000 до googolplex
$month = 3;   // 1–12
$day = 13;    // 1–31

$url = "https://wildtracks.pro/api/time/$token/$year/$month/$day/";

$jsonData = file_get_contents($url);
if ($jsonData === false) {
    die('Error receiving data from the URL');
}

$dataArray = json_decode($jsonData, true);
if ($dataArray === null) {
    die('Error decoding JSON');
}

echo "<pre>";
print_r($dataArray);
echo "</pre>";
