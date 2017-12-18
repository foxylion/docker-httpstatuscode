<?php

http_response_code(isset($_GET['status']) ? $_GET['status'] : 200);
header('Content-Type: application/json');

echo json_encode($_SERVER, JSON_PRETTY_PRINT);
