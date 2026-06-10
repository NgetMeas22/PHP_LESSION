 
<?php
    class Person{
    // Data member / property
    public $name = "Meas";
    public $age = "25";
    public $major = " Information Technology";

    // method member 
    public function show(){
        echo "Name : $this->name
        <br> Age : $this->age
        <br> Major : $this->major";
    
    }
    }
        $obj1 = new Person();
        // echo $obj1->name;
        $obj1->show();
?>


