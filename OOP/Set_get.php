<?php

    class Employee{
        private $name ="Jack";
        
        private $Salary =1200;
        private $position ="Web";
        
        public function info(){
            echo "Name : $this->name, Salary : $this->Salary, Position : $this->position";
        
            } 
        public function setname($name){
            $this->name = $name;
        }
        public function setsalary($Salary){
            $this->Salary = $Salary;
        }
        public function setposition($position){
            $this->position = $position;
        }
        public function getname(){
            return $this->name;
        }
        public function getsalary(){
            return $this->Salary;
        }
        public function getposition(){
            return $this->position;
        }
        }
        $emp = new Employee();
        $emp->info();
        echo "<br>";

        $emp->setname("Meas");
        // echo "Before Update : " . $emp->getname() . "<br>";
        $emp->setsalary(3500);
        // echo "Salary : " . $emp->getsalary() . "<br>";
        $emp->setposition("Fullstack");
        // echo "Position : " . $emp->getposition();
        echo"<hr>";

        echo "After Update : " . $emp->getname() . "<br>";
        echo "Salary : " . $emp->getsalary() . "<br>";
        echo "Position : " . $emp->getposition();

?>