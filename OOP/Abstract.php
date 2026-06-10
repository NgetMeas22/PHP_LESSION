<!-- Abstract Class គឺជា class មេ ដែលមិនអាច create object បាន ហើយប្រើសម្រាប់ឲ្យ
                class កូន extends និង override abstract methods។ -->



<?php 

    abstract class Payment {
        public $amount;
        function __construct($amount){
            $this->amount = $amount;
        }
        abstract public function pay();
    }
    class PayPay extends Payment{
        public function pay(){
            echo "Pay with PayPay Amount : $this->amount<br>";
        }
    }
    // Example usage:
    $payment = new PayPay(150);
    $payment->pay();
    echo "<hr>";
    $cana = new PayPay(200);
    $cana->pay();

?>