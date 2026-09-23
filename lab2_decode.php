<?php
$jsonString = '{"name":"Maria","age":21,"email":"maria@example.com"}';
$phpObject = json_decode($jsonString);
$phpArray = json_decode($jsonString, true);
echo "Object: " . $phpObject->name . "<br>";
echo "Array: " . $phpArray['email'];
?>
