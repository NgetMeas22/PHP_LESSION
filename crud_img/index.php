<?php
require_once 'db.php';

$products = $conn->query("SELECT * FROM products ORDER BY p_id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
            <div>
              
                <h1 class="h2 mb-2">Product Management</h1>
                <p class="text-muted mb-0">Create, edit, and keep your product list organized.</p>
            </div>
            <a href="form_insert.php" class="btn btn-primary btn-lg">Add Product</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($products && $products->num_rows > 0) : ?>
                                <?php while ($row = $products->fetch_assoc()) : ?>
                                    <tr>
                                        <td class="text-muted">#<?= (int) $row['p_id'] ?></td>
                                        <td class="fw-semibold"><?= htmlspecialchars($row['p_name']) ?></td>
                                        <td>$<?= number_format((float) $row['p_price'], 2) ?></td>
                                        <td><span class="badge bg-secondary"><?= (int) $row['p_qty'] ?></span></td>
                                        <td><?= nl2br(htmlspecialchars($row['p_description'])) ?></td>
                                        <td>
                                            <?php if (!empty($row['p_img']) && file_exists('images/' . $row['p_img'])) : ?>
                                                <img src="images/<?= htmlspecialchars($row['p_img']) ?>" alt="<?= htmlspecialchars($row['p_name']) ?>" class="img-fluid rounded" style="max-width: 100px;">
                                            <?php else : ?>
                                                <span class="text-muted small">No image</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-end">
                                            <a href="form_update.php?id=<?= (int) $row['p_id'] ?>" class="btn btn-outline-primary btn-sm me-2">Edit</a>
                                            <a href="delete.php?id=<?= (int) $row['p_id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Delete this product?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="7">
                                        <div class="alert alert-secondary mb-0 text-center">No products yet. Add your first product to get started.</div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>
