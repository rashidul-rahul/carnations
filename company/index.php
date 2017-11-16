<?php
$db = new PDO("mysql:hostname=localhost;dbname=carnations", "root", "");
$query = "SELECT * FROM `company`";
$stmt = $db->query($query);
$companys = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <h1>All Company List</h1>
    <div class="col-md-6">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $serial = 1;
            foreach ($companys as $company){
            ?>
            <tr>
                <th scope="row"><?= $serial; ?></th>
                <td><?=$company['name']?></td>
                <td><?=$company['description']?></td>
                <td><a href="/carnations/company/edit.php?id=<?=$company['id'];?>">Edit</a> || <a href="/carnations/company/delete.php?id=<?=$company['id'];?>">Delete</a></td>
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