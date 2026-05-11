<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hw ETEC Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:gray">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Calculator</h2>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">First Number</label>
                <input type="number" name="num1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ending Number</label>
                <input type="number" name="num2" class="form-control" required>
            </div>

            <div class="text-center mb-3">
                <button name="op" value="+" class="btn btn-primary">+</button>
                <button name="op" value="-" class="btn btn-danger">-</button>
                <button name="op" value="*" class="btn btn-success">*</button>
                <button name="op" value="/" class="btn btn-warning">/</button>
                <button name="op" value="%" class="btn btn-dark">%</button>
            </div>
        </form>
        <h4 class="text-center">
            Your Result:
            <?php
                function calculate($a, $b, $op) {
                    switch ($op) {
                        case '+': return $a + $b;
                        case '-': return $a - $b;
                        case '*': return $a * $b;
                        case '/': return ($b != 0) ? $a / $b : "Cannot divide by 0";
                        case '%': return $a % $b;
                        default: return "Invalid";
                    }
                }

                if (isset($_POST['op'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $op = $_POST['op'];

                    echo calculate($num1, $num2, $op);
                }
            ?>
        </h4>

    </div>
</div>

</body>
</html>
