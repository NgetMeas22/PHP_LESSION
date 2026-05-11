<?php

    $array1 =["php","react","vue"];
    $array2 =[10,20,30];

    $merg =array_merge($array1,$array2);
    print_r($merg);

    echo "<hr>";

    foreach($merg as $val){
        echo $val . "<br>";

    }
    echo "<hr>";
    $total =array_push($merg,"C++","Python",333,"C");
        echo "$total<hr>";

$letter = ['z','c','h','d','n','b'];
print_r($letter);

echo "<hr>";

$result = array_slice($letter, 3, 2);

print_r($result);

echo "<hr> Sort Small to Big <br>";
sort($letter);
print_r($letter);

echo "<hr> Sort Big to Small <br>";
rsort($letter);
print_r($letter);

echo "<hr>";
echo "Sort by value <br>";

$arrayKey = ["php" => 500, "cpp" => 100, "java" => 50, "vue" => 250];
print_r($arrayKey);

echo "<br>";

asort($arrayKey);
print_r($arrayKey);

echo "<hr>";

$arrayKey1 = ["php" => 500, "cpp" => 100, "java" => 50, "vue" => 250];
echo "Sort by Key <br>";

print_r($arrayKey1);

ksort($arrayKey1);

echo "<br>";
print_r($arrayKey1);
        
?>