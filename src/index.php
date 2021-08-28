<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers : Content-Type");
header("Access-Control-Allow-Methods : POST, OPTIONS");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include('./../settings/post.php');
}
