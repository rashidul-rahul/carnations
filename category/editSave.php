<?php

//var_dump(file_exists("../config/Database.php"));
$query = "UPDATE `category` SET `name` = '".$_POST['name']."' WHERE id=".$_POST['id'];
echo $query;
//Create Database Connection
$db = new PDO("mysql:hostname=localhost;dbname=carnations", "root", "");
$check = $db->exec($query);
$db = null;
//echo $query;
if($check){
//    echo "ok";
    header("Location: http://localhost:80/carnations/category/index.php");
} else{
    echo "<h2>Error</h2>";
}