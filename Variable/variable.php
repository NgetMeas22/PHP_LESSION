<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $p_id = 1111;
    $p_name = "PC";
    $p_price = 1500;
    $p_stock = 10;
    $p_img = "https://www.jouleperformance.com/media/catalog/product/7/9/79fc2b3a-7221-43bb-8ae9-1b9b0e214e97_1.png?optimize=medium&fit=bounds&height=450&width=600&canvas=600:450";

       echo"
        <h1>$p_id</h1>
        <h1>$p_name</h1>
        <h1>$p_price</h1>
        <h1>$p_stock</h1>
        <img src='$p_img' alt='$p_name' width='500'>
       ";
       ?>
       
    <hr>
    <h1><?= $p_id?></h1>
    <h1><?= $p_name?></h1>
    <h1><?= $p_price?></h1>
    <h1><?= $p_stock?></h1>
    <img src="<?=$p_img?>" alt='$p_name' width='500'>

</body>
</html>
