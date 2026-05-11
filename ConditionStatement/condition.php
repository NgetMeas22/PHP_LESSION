<!-- <?php



$score = 90;

if($score>=85 && $score<=100)
    echo "Excellence....";

else if($score>=70 && $score <85)
    echo "Very good.....";
else if($score>=50 && $score <70)
    echo " good.....";
else
    echo"Fail";


?> -->


<?php

    $num =4;
    if($num == 1){
        echo "The dice Number is 1";
        }else if($num %2 == 0){
        if($num ==2){
            echo "The dice Number is 2";
        }else if($num ==4){
            echo "The dice Number is 4";
        }else if($num ==6){
            echo"The Number is 6";
        }else{
            echo"The number has to be betwwen 1 and 6";
        }
        }else if ($num == 3){
            echo "The dice Number is 3";
        }else if ($num == 5){
            echo "The dice Number is 5";
        }else{
            echo "The number has to be betwwen 1 and 6";
        }
?>