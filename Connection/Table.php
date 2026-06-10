<?php
$conn = new mysqli('localhost', 'root', '', 'sql_12_1');

// Fetch products
$select = "SELECT * FROM products ORDER BY p_id DESC";
$result = $conn->query($select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <h3 class="card-title mb-0 text-primary text-center fw-bold">Product Management</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <!-- Bootstrap styled table with hover, striping, and borders -->
                    <table class="table table-striped table-hover table-bordered align-middle mb-0">
                        <!-- Dark header to make the ID and titles prominent -->
                        <thead class="table-dark text-uppercase fs-6">
                            <tr>
                                <th scope="col" class="px-3">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Description</th>
                                <th scope="col" class="text-center" style="width: 180px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result && $result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td class="fw-bold px-3 text-secondary"><?= $row['p_id'] ?></td>
                                        <td><?= htmlspecialchars($row['p_name']) ?></td>
                                        <td class="text-success fw-semibold">$<?= number_format($row['p_price'], 2) ?></td>
                                        <td><?= $row['p_qty'] ?></td>
                                        <td><?= htmlspecialchars($row['p_description']) ?></td>
                                        <td class="text-center">
                                            <!-- Bootstrap styled buttons -->
                                            <button class="btn btn-sm btn-primary me-1 fw-medium">Edit</button>
                                            <button class="btn btn-sm btn-danger fw-medium">Delete</button>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">No products found.</td>
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