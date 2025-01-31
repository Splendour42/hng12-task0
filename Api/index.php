 <?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


$response = array(
    "email" => "aaronome@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"),
    "github_url" => "https://github.com/splendour42/hng12-task0"
);


echo json_encode($response);
