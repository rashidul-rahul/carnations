<?php
$db = new PDO("mysql:hostname=localhost;dbname=carnations", "root", "");
$query = "SELECT * FROM `category` WHERE id=".$_GET['id'];
//echo $query;
$stmt = $db->query($query);
$category = $stmt->fetchAll();
$db = null;
?>
<html lang="en">
<head>
    <base href="/carnations/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carnations || Complete Beauty</title>
    <link href="/carnations/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Edit <?=$category[0]['name']?></h2><hr/>
    <div class="col-lg-8">
        <form action="/carnations/category/editSave.php" method="post">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="<?=$category[0]['name'];?>" value="<?=$category[0]['name'];?>">
            </div>
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h3><a href="/carnations/index.php">Back To Home</a></h3>
    </div>
</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>
