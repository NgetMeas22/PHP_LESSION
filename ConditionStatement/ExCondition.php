


<?php
    $code =0;
    $name = "";
    $price = 0;
    $qty = 0;
    $total = 0;
    $discount = 0;
    $payment = 0;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
        $code = $_POST['code'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];

        $total = $price * $qty;
        
        if($total >= 1 && $total <=10){
            $rate = 0.1;
        }else if($total > 10 && $total <= 20){
            $rate = 0.2;
        }else if($total > 20 && $total <= 30){
            $rate = 0.3;
        }else if($total > 30 && $total <= 40){
            $rate = 0.4;
        }else if($total > 40 && $total <= 50){
            $rate = 0.5;
        }else if($total > 50 && $total <= 60){
            $rate = 0.6;
        }else{
            $rate = 0.7;
        }
        $discount = $total* $rate;
        $payment = $total - $discount;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Product form</title>
</head>
<body class=" bg-secondary">
    <main class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class=" col-6 ">
                <div class="card">
                    <form class="p-4" method="POST">
                        <h1> Product Form</h1>
                        <div class="mt-2">
                            <label for="" class=" form-label"> Code</label>
                            <input type="number" name="code" class=" form-control" placeholder="Enter Code ">
                        </div>
                        <div class="mt-2">
                            <label for="" class=" form-label"> Name</label>
                            <input type="text" name="name" class=" form-control" placeholder="Enter Name ">
                        </div>
                        <div class="mt-2">
                            <label for="" class=" form-label"> Price</label>
                            <input type="number" name="price" class=" form-control" placeholder="Enter Price ">
                        </div>
                        <div class="mt-2">
                            <label for="" class=" form-label"> Qty</label>
                            <input type="number" name="qty" class=" form-control" placeholder="Enter Qty ">
                        </div>
                        <div class="mt-4">
                            <button class=" btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6">
                <div class="card p-3">
                    <table class=" table table-bordered table-hover text-center align-middle">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Discount</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $code ?></td>
                                <td><?= $name ?></td>
                                <td>$<?= $price ?></td>
                                <td><?= $qty ?></td>
                                <td>$<?= $total ?></td>
                                <td>$<?= $discount ?></td>
                                <td>$<?= $payment ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>

