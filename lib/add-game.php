<?php
$image = trim(filter_var($_POST['image'], FILTER_SANITIZE_SPECIAL_CHARS));

$followers = trim(filter_var($_POST['followers'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($image) < 3) {
    echo "image error";
    exit;
}

if(strlen($followers) < 1) {
    echo "followers error";
    exit;
}

require "db.php";

$sql = 'INSERT INTO trending(image, followers) VALUES(?, ?)';
$query = $pdo ->prepare($sql);
$query-> execute([$image, $followers]);

header('location: /trending.php');
?>