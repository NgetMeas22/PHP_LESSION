<!-- Interface.php គឺជា Interface នៅក្នុង PHP ដែលប្រើសម្រាប់កំណត់ “ច្បាប់” ឬ “template” ឲ្យ class ផ្សេងៗ follow។
វាមានតែ method declaration ប៉ុណ្ណោះ មិនមាន code ខាងក្នុង method ទេ។

Interface មានន័យអ្វី?
Interface = កិច្ចសន្យា (Contract)
Class ណាដែល implements Interface ត្រូវតែសរសេរ method ទាំងអស់ដែលមាននៅក្នុង Interface។ -->


<?php

    interface Payment {
        public function pay($amount);

    }
    class ABA implements Payment{
        public function pay($amount){
            echo "Pay with ABA Amount : $amount<br>";
        }
    }
    class AC implements Payment{
        public function pay($amount){
            echo "Pay with AC Amount : $amount<br>";
        }
    }
    class Wing implements Payment{
        public function pay($amount){
            echo "Pay with Wing Amount : $amount<br>";
        }
    }

    $aba = new ABA();
    $aba->pay(100);
    $ac = new AC();
    $ac->pay(200);
    $wing = new Wing();
    $wing->pay(300);
    
?>