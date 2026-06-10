<?php
require_once 'db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: index.php');
    exit();
}

$stmt = $conn->prepare('SELECT * FROM products WHERE p_id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$product) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
            <div>
                
                <h1 class="h2 mb-2"><?= htmlspecialchars($product['p_name']) ?></h1>
                <p class="text-muted mb-0">Update product information or replace the image.</p>
            </div>
            <a href="index.php" class="btn btn-outline-secondary">Back to List</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= (int) $product['p_id'] ?>">

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Product name</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?= htmlspecialchars($product['p_name']) ?>" required>
                        </div>
                        <div class="col-md-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" id="price" name="price" class="form-control" value="<?= htmlspecialchars($product['p_price']) ?>" min="0" step="0.01" required>
                        </div>
                        <div class="col-md-3">
                            <label for="qty" class="form-label">Quantity</label>
                            <input type="number" id="qty" name="qty" class="form-control" value="<?= (int) $product['p_qty'] ?>" min="0" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Current image</label>
                            <div class="border rounded p-2 text-center">
                                <?php if (!empty($product['p_img']) && file_exists('images/' . $product['p_img'])) : ?>
                                    <img src="images/<?= htmlspecialchars($product['p_img']) ?>" alt="<?= htmlspecialchars($product['p_name']) ?>" class="img-fluid rounded" style="max-height: 160px;">
                                <?php else : ?>
                                    <span class="text-muted small">No image</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="img" class="form-label">Replace image</label>
                            <input type="file" id="img" name="img" class="form-control" accept="image/*">
                            <div class="form-text">Leave this empty to keep the current image.</div>
                        </div>
                        <div class="col-12">
                            <label for="des" class="form-label">Description</label>
                            <textarea id="des" name="des" class="form-control" rows="5" required><?= htmlspecialchars($product['p_description']) ?></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="index.php" class="btn btn-light">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>
