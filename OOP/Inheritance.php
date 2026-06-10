 
<?php

    class Person{
        protected $name;
        protected $gender;

    function  __construct($name, $gender){
        $this->name = "Meas";
        $this->gender = "Male";
    
    }
    public function info_person(){
        echo "Name : $this->name,<br> Gender : $this->gender";

        }
    }
    class Student extends Person{

        private $score;
        private $grade;

        function __construct($name, $gender, $score, $grade){
            parent::__construct($name, $gender);
            $this->score = $score;
            $this->grade = $grade;
        }
        public function info_student(){
            Person::info_person();
            echo "<br> Score : $this->score,<br> Grade : $this->grade";
        
        }
    }
    class Employee extends Person{
        private $salary;
        private $position;

        function __construct($name, $gender, $salary, $position){
            parent::__construct($name, $gender);
            $this->$salary = $salary;
            $this->$position = $position;
        }
        public function info_employee(){
            Person::info_person();
            echo "Score : $this->salary,<br> Grade : $this->position";
        }
    }
    $person = new Person("Jack","male");
    $person->info_person();
    echo "<hr>";

    $student = new Student("Rasmach")


?>