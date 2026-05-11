
<?php

// loop have 4 like ForLoop WhileLoop DoWhileLoop foreachLoop
//WhileLoop
    $number = 1;
    $odd = [];
    $even = [];
        while($number <=50){
            if($number % 2 == 0){
                $even[] = $number;
            }else{
                $odd[] = $number;
            }
            $number++;

        }
        foreach($odd as $o){
            echo "Number odd $o <br>";
        }
        echo "<hr>";
        foreach($even as $e){
            echo " Number even $e <br>";
        }

?>


