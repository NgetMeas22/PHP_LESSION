<?php
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $db_name = 'sql_12_1';

// $conn = new mysqli($servername, $username, $password, $db_name);

$conn = new mysqli('localhost', 'root', '', 'sql_12_1');

$name = "Beef";
$price = 10;
$qty = 43;
$des = "Chnganh klang";

// Corrected SQL statement to insert multiple rows
$sql = "INSERT INTO products (p_name, p_price, p_qty, p_description) 
        VALUES ('$name', $price, $qty, '$des'),
               ('Ice Cream', 1, 40, 'Delicouse')";

// echo $sql;
$result = $conn->query($sql);

if($result){
    echo "Inserted Successfully";
}
?>