<?php
require_once "db.php";

$select = "SELECT * FROM products ORDER BY p_id DESC";
$products = $conn->query($select);

if(!$products){
    die("Query Failed: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product CRUD</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Product List</h3>
            <a href="form.html" class="btn btn-dark">
                + Add Product
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>DESCRIPTION</th>
                        <th width="180">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $products->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $row['p_id']; ?></td>
                        <td><?= $row['p_name']; ?></td>
                        <td>$<?= $row['p_price']; ?></td>
                        <td><?= $row['p_description']; ?></td>
                        <td>
                            <a href="update.php?id=<?= $row['p_id']; ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <a href="delete.php?id=<?= $row['p_id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure to delete this product?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>