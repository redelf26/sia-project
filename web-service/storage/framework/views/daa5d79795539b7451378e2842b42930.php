<?php
header('Content-Type: application/json');
$response = array("method" => $_SERVER['REQUEST_METHOD']);

// Retrieve raw JSON data from request body
$data = file_get_contents('php://input');

// // Decode JSON data
$decodedData = json_decode($data, true);

echo json_encode($response);
?><?php /**PATH C:\xampp\htdocs\sia-project\web-service\resources\views/view-json.blade.php ENDPATH**/ ?>