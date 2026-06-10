<?php

    require_once "db.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $des = $_POST['des'];

        $update = "UPDATE products SET p_name='$name', 
                            p_price='$price', 
                            p_qty='$qty',
                            p_description='$des' 
                            WHERE p_id=$id";

        $result = $conn->query($update);
        $conn->close();

        if($result){
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
