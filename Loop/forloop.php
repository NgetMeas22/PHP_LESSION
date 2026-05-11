<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>ForLoop</title>
</head>
<body>

<?php
$brush_price = 100;

echo "<main class='container px-5 mt-3'>
        <div class='col-4'>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>";

for ($qty = 10; $qty <= 50; $qty += 10) {
    echo "<tr>";
    echo "<td>$qty</td>";
    echo "<td>" . ($qty * $brush_price) . "</td>";
    echo "</tr>";
}

echo "      </tbody>
            </table>
        </div>
      </main>";
?>
<hr>
   <main class="container px-5">
    <div class="col-4">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>

                <?php for ($qty = 15; $qty <= 100; $qty += 15): ?>
                    <tr>
                        <td><?= $qty ?></td>
                        <td><?= $qty * $brush_price ?></td>
                    </tr>
                <?php endfor; ?>

            </tbody>
        </table>
    </div>
</main>
    
</body>
</html>