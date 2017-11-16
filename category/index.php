<?php
$db = new PDO("mysql:hostname=localhost;dbname=carnations", "root", "");
$query = "SELECT * FROM `category`";
$stmt = $db->query($query);
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
$db = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carnations || Complete Beauty</title>
    <link href="/carnations/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>All Category List</h1>
    <div class="col-md-6">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Catagory Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $serial = 1;
            foreach ($categories as $category){
            ?>
            <tr>
                <th scope="row"><?= $serial; ?></th>
                <td><?=$category['name']?></td>
                <td><a href="/carnations/category/edit.php?id=<?=$category['id'];?>">Edit</a> || <a href="/carnations/category/delete.php?id=<?=$category['id'];?>">Delete</a></td>
                <?php
                $serial++;
                }
                ?>
            </tbody>
        </table>
        <h3><a href="/carnations/index.php">Back To Home</a></h3>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>