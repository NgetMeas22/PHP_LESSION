<?php

// Use GET 👉 search, filter, view page
// Use POST 👉 login, register, submit form

$foods = [
    ["code" => 501, "name" => "Fried Rice", "price" => 2.50, "stock" => 20],
    ["code" => 502, "name" => "Noodles", "price" => 3.00, "stock" => 209],
    ["code" => 503, "name" => "Burger", "price" => 4.50, "stock" => 320],
    ["code" => 504, "name" => "Pizza", "price" => 5.00, "stock" => 620],
    ["code" => 505, "name" => "Hot Dog", "price" => 2.00, "stock" => 720],
    ["code" => 506, "name" => "Sandwich", "price" => 2.80, "stock" => 220],
    ["code" => 507, "name" => "Fried Chicken", "price" => 3.50, "stock" => 80],
    ["code" => 508, "name" => "Steak", "price" => 7.00, "stock" => 90],
    ["code" => 509, "name" => "Spaghetti", "price" => 4.00, "stock" => 343],
    ["code" => 510, "name" => "Soup", "price" => 2.20, "stock" => 60],
    ["code" => 511, "name" => "Salad", "price" => 2.50, "stock" => 76],
    ["code" => 512, "name" => "Sushi", "price" => 6.00, "stock" => 56],
    ["code" => 513, "name" => "Dumplings", "price" => 3.00, "stock" => 23],
    ["code" => 514, "name" => "Pancake", "price" => 2.70, "stock" => 87],
    ["code" => 515, "name" => "Ice Cream", "price" => 1.50, "stock" => 94],
    ["code" => 516, "name" => "Donut", "price" => 1.20, "stock" => 65],
    ["code" => 517, "name" => "Fries", "price" => 1.80, "stock" => 56],
    ["code" => 518, "name" => "Grilled Fish", "price" => 5.50, "stock" => 39],
    ["code" => 519, "name" => "BBQ Pork", "price" => 4.80, "stock" => 320],
    ["code" => 520, "name" => "Spring Rolls", "price" => 2.60, "stock" => 80]
];

// Get keyword from form
$key = trim($_GET['keyword'] ?? '');

// Store search result
$search_result = [];

// Search
if (!empty($key)) {

    foreach ($foods as $food) {

        if (stripos($food['name'], $key) !== false) {
            $search_result[] = $food;
        }
    }
} else {
    $search_result = $foods;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Food Search</title>
</head>
<body class="bg-light">
<div class="container mt-5">
    <!-- Search Form -->
    <form method="GET" class="d-flex justify-content-center mb-4">
        <div class="input-group w-50 shadow">
            <input 
                type="text"
                name="keyword"
                class="form-control"
                placeholder="Search food..."
                value="<?= htmlspecialchars($key) ?>"
            >
            <button type="submit" class="btn btn-dark">
                Search
            </button>
        </div>
    </form>
    <!-- Back Button -->
    <a href="Get.php" class="btn btn-secondary mb-3">
        Back
    </a>
    <!-- Table -->
    <div class="card shadow">
        <div class="card-header bg-danger text-white text-center">
            <h4>Foods List</h4>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover table-striped text-center mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Price ($)</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($search_result)): ?>
                        <?php foreach ($search_result as $food): ?>
                            <tr>
                                <td><?= $food['code'] ?></td>
                                <td><?= $food['name'] ?></td>
                                <td>
                                    $<?= number_format($food['price'], 2) ?>
                                </td>
                                <td>
                                    <span class="badge bg-success">
                                        <?= $food['stock'] ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-danger fw-bold">
                                ❌ Food Not Found
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>