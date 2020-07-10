<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$resopnse = array(
    "version" => "1.0.2",
    "date" => "2020-05-30"
);
echo json_encode($resopnse);
?>