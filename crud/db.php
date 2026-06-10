

<?php
    $conn = new mysqli('localhost', 'root','', 'sql_12_1');

    if($conn->connect_error){
        echo"Connetct Error ";
    }

?>  