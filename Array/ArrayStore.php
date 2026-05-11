<?php

    $products = [
        [
            "id" => 101,
            "p_name" => "Laptop",
            "p_price" => 1500.40,
            "p_stock" =>20,
            "img" => "1.jpg"
        ],
        [
            "id" => 102,
            "p_name" => "Kas",
            "p_price" => 50.50,
            "p_stock" =>20,
            "img" => "2.jpg"
        ],
        [
            "id" => 103,
            "p_name" => "Moniter",
            "p_price" => 1600,
            "p_stock" =>40,
            "img" => "3.jpg"
        ],
        [
            "id" => 104,
            "p_name" => "Mouse",
            "p_price" =>35,
            "p_stock" =>14,
            "img" => "4.jpg"
        ],
        [
            "id" => 105,
            "p_name" => "Amazon",
            "p_price" => 65.00,
            "p_stock" =>80,
            "img" => "5.jpg"
        ],
       
    ];
    // foreach($products as $product){
    //     echo $product ['id'];
    //     echo $product ['p_name'];
    //     echo $product ['p_price'];
    //     echo $product ['p_stock'];
    //     echo "<img src='./img/" . $product['img'] . "' width='100'>";
        
    //     // echo "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Card Table</title>
</head>
<body>
   <div class="container mt-6">
    <div class="col-9 ">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>p_name</th>
                    <th>p_price</th>
                    <th>p_stock</th>
                    <th>img</th>
                </tr>
            </thead>
            <tbody>
                  <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['p_name']; ?></td>
                <td><?= $product['p_price']; ?></td>
                <td><?= $product['p_stock']; ?></td>
                <td>
                    <img src="./img/<?= $product['img']; ?>" width="80" class="rounded">
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   </div>
</body>
</html>