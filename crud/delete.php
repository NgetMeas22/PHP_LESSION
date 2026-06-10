<?php
require_once "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $delete = "DELETE FROM products WHERE p_id = $id";
    
    if ($conn->query($delete) === TRUE) {
        header("Location: index.php");
        exit();
    } 
}
?> 
