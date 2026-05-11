<?php

$array1 =[

    "1.jpg",
    "2.jpg",
    "3.jpg",
    "4.jpg",
    "5.jpg"

];

    foreach($array1 as $value){
        echo "<img src='./img/" . $value . "' width='100'>";

}

$nestd =[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];
print_r($nestd);
?>