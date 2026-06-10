 
<?php
    require_once "db.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $des = $_POST['des'];

        $insert = "INSERT INTO products(p_name, p_price, p_qty, p_description)
        VALUES('$name', '$price', '$qty', '$des')";

        if($conn->query($insert) === TRUE){
            header("Location: index.php");
            exit();
        }else{
            echo "Error: " . $conn->error;
        }
    }else{
        header("Location: index.php");
        exit();
    }
?>