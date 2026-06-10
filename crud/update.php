<?php
require_once "db.php";
$id = $_GET['id'];
$select = "SELECT * FROM products WHERE p_id = $id";
$product = $conn->query($select)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h3> Update Product</h3>
                </div>
                <div class="card-body p-4">
                    <form action="edit.php" method="POST">
                        <!-- Hidden ID -->
                        <input type="hidden"
                               name="id"
                               value="<?= $product['p_id'] ?>">
                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Product Name
                            </label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="<?= $product['p_name'] ?>"
                                   placeholder="Enter Product Name"
                                   required>
                        </div>
                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Price
                            </label>
                            <input type="number"
                                   name="price"
                                   class="form-control"
                                   value="<?= $product['p_price'] ?>"
                                   placeholder="Enter Price"
                                   required>
                        </div>
                        <!-- Quantity -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Quantity
                            </label>
                            <input type="number"
                                   name="qty"
                                   class="form-control"
                                   value="<?= $product['p_qty'] ?>"
                                   placeholder="Enter Quantity"
                                   required>
                        </div>
                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Description
                            </label>
                            <textarea name="des"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Enter Description"><?= $product['p_description'] ?></textarea>
                        </div>
                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="index.php" class="btn btn-secondary">
                                Back
                            </a>
                            <button type="submit" class="btn btn-success">
                                Update Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>