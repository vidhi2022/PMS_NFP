<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $remarks = $_POST['remarks'] ?? '';
    $file = 'remarks.txt';

    if (!empty(trim($remarks))) {
        file_put_contents($file, $remarks . PHP_EOL, FILE_APPEND);
        echo "Saved successfully";
    } else {
        http_response_code(400);
        echo "Empty remarks";
    }
} else {
    http_response_code(405);
    echo "Method not allowed";
}
?>