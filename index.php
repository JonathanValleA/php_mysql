<?php include 'conection.php'?>
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
                <td><?php echo $products['price'] ?></td>
                <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        <?php }?>
</body>