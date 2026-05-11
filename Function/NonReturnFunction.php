

<?php
    // Aqment bos domlai oy parameter

function non_return_non_params(){
    echo " Hello Non_return Function non_params";

}

$product = [
    "id" => 101,
    "p_name" => "Moniter",
    "p_price" => 100.40,
    "p_stock" => 5,
    "p_img" => "https://i.pinimg.com/236x/d8/60/29/d8602953e093d001ba8f363fcaca590e.jpg"
];

function non_return_has_params($product){
    if(isset($product)){
        foreach($product as $key => $value ){
            if($key === "p_img"){
                echo "<li>$key : <img src='$value' width='100px'></li>";
                }else{
                echo "<li>$key : $value</li><br>";
            }
        }
    }else{
        echo "Invaild Product";

    }
}
non_return_has_params($product);
?>