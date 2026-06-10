<!-- Function Overloading (ការផ្ទុកអនុគមន៍ច្រើន)

Function Overloading គឺជាការបង្កើត Function មានឈ្មោះដូចគ្នា ប៉ុន្តែ parameter ខុសគ្នា។
                     វាអាចខុសគ្នាតាម៖
- ចំនួន parameter
- ប្រភេទ data type
- លំដាប់ parameter

Function Override / Method Overriding (ការសរសេរជាន់លើ Function)

Function Overriding គឺជាការដែល Class កូន (Derived Class) សរសេរ Function ថ្មី 
                    ជំនួស Function របស់ Class មេ (Base Class)។
លក្ខខណ្ឌ៖

- ឈ្មោះ Function ដូចគ្នា
- Parameter ដូចគ្នា
- ប្រើ Inheritance -->


<?php

    class Animale {
        public function sound ()
        {
            echo"Animale Make Sound"; 
        }
    }
    class Dog extends Animale{
        public function sound()
        {
            echo"Dog Bark";
        }

    }
    class Cat extends Animale{
        public function sound()
        {
            echo"Cat Meow";
        }
    }

    $d = new Dog();
    $d->sound();
    echo"<hr>";
    $c = new Cat();
    $c->sound();


?>