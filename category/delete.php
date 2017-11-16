<?php
$db = new PDO("mysql:hostname=localhost;dbname=carnations", "root", "");
$query = "DELETE FROM `category` WHERE `category`.`id` =".$_GET['id'];
$stmt = $db->exec($query);
$db = null;

if ($stmt){
    header("Location: http://localhost:80/carnations/category/index.php");
} else {
    echo "<h2>Error</h2>";
}