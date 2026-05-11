<?php

    $array = [10,20,30,40,50];
    $arraykey =[

        "id" => 30,
        "name" => "Meas",
        "gender" => "Male",
        "email" => "measgaming@gail.com",
        "password" => "1234567"
    ];
    
    echo $array[2],"<br>";
    echo $arraykey ['email'], "<br><hr>";

    foreach($array as $index => $value){
        echo"Index $index The number is $value<br>";

    }
    echo "<hr>";
    foreach($arraykey as $key => $value){
        echo"$key : $value<br>";
    }



?>