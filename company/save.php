<?php
if(empty($_POST['name']) || empty($_POST['description'])){
    header("Location: http://localhost:80/carnations/company/create.php");
}
//var_dump(file_exists("../config/Database.php"));
$query = "INSERT INTO `company` (`name`, `description`) VALUES ('".$_POST['name']."', '".$_POST['description']."')";
//Create Database Connection
$db = new PDO("mysql:hostname=localhost;dbname=carnations", "root", "");
$check = $db->exec($query);
$db = null;
//echo $query;
if($check){
//    echo "ok";
    header("Location: http://localhost:80/carnations/company/index.php");
} else{
    echo "<h2>Error</h2>";
}
