<!DOCTYPE html>
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
    <h2>Create Category</h2><hr/>
    <div class="col-lg-8">
        <form action="/carnations/category/save.php" method="post">
            <div class="form-group">
                <label for="name">Catagory Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h3><a href="/carnations/index.php">Back To Home</a></h3>
    </div>
</div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>