<?php
$inputJSON = file_get_contents('php://input');
if (empty($inputJSON)) {
    $inputJSON = json_encode([
        "username" => "admin",
        "password" => "1234"
    ]);
}
$data = json_decode($inputJSON, true);
if ($data) {
    echo "Username: " . $data['username'] . "<br>";
    echo "Password: " . $data['password'];
} else {
    echo "No JSON input received.";
}
?>
