<?php

    $nestd = [
        [10,20,30],
        [40,50,60],
        [70,80,90]
    ];
    echo"<hr>";
    echo $nestd [1][1]."<br><br>";

    foreach($nestd as $row){
        foreach($row as $col){
            echo $col . "<br>";
        }
        echo "<br>";
    }

?>