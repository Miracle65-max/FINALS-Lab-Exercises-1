<?php
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);
$name = $input['name'] ?? 'Guest';
$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];
echo json_encode($response);
?>
