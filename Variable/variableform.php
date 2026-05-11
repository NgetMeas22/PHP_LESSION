<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>

    <style>
        table {
            border-collapse: collapse;
            width: 60%;
           
            text-align: center;
        }
        th, td {
            border: 2px solid black;
            padding: 20px;
        }
        img {
            width: 50px;
        }
    </style>
</head>
<body>

<?php
$p_id = 1111;
$p_name = "PC";
$p_price = 1500;
$p_stock = 10;
$p_img = "https://www.jouleperformance.com/media/catalog/product/7/9/79fc2b3a-7221-43bb-8ae9-1b9b0e214e97_1.png";
?>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Image</th>
    </tr>

    <tr>
        <td><?= $p_id ?></td>
        <td><?= $p_name ?></td>
        <td>$<?= $p_price ?></td>
        <td><?= $p_stock ?></td>
        <td><img src="<?= $p_img ?>" alt="<?= $p_name ?>"></td>
    </tr>
</table>

</body>
</html>