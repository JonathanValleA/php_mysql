<?php include 'conection.php'?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PRODUCTOS</title>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Price</th>
        </th>
    </thead>
    <tbody>
        <?php foreach ($products as $i => $products){ ?>
            <tr>
                <th scope="row"><?php echo $i +1 ?></td>
                <td><?php echo $products['Name'] ?></td>
                <td><?php echo $products['Descripcion'] ?></td>
                <td><?php echo $products['Price'] ?></td>
                <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        <?php }?>
</body>