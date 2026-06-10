<?php

class Student
{
    public $id, $name, $gender, $age, $score;

    function __construct($id, $name, $gender, $age, $score)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->score = $score;
    }
    public function display()
    {
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Gender: " . $this->gender . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Score: " . $this->score . "<br>";
    }
}

$stu1 = new Student(101, "Meas", "Male", 18, 304);
$stu1->display();

?>

