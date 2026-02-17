<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST request received!";

    $data = file_get_contents("php://input");
    echo $data;
}
?>
