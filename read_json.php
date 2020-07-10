<?php


$url = "http://met.school-admission.com/chatbot.php";
$json = file_get_contents($url);
$json_data = json_decode($json, true);

foreach ($json_data as $key => $value) {
    echo $value["FIRSTNAME"] . ", " . $value["USERNAME"] . "<br>";
}

?>