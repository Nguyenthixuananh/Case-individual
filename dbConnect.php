<?php

include_once "DB.php";

$dbConnect = new DB();


$sql = "SELECT * FROM notes";
$stmt = $dbConnect->connect()->query($sql);
$result = $stmt->fetchAll();

echo "<pre>";
var_dump($result);
die();

