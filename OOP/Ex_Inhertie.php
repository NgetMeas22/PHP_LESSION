<?php

// Parent Class
class Person {
    public $name;
    public $gender;

    // Constructor
    public function __construct($name, $gender) {
        $this->name = $name;
        $this->gender = $gender;
    }

    // Method
    public function showBasicInfo() {
        return "
            <td>{$this->name}</td>
            <td>{$this->gender}</td>
        ";
    }
}

// Child Class (Inheritance)
class Employee extends Person {

    public $salary;
    public $position;

    public function __construct($name, $gender, $salary, $position) {

        // Call parent constructor
        parent::__construct($name, $gender);

        $this->salary = $salary;
        $this->position = $position;
    }

    // Method
    public function showEmployee() {
        return "
            <tr>
                " . $this->showBasicInfo() . "
                <td>{$this->salary}</td>
                <td>{$this->position}</td>
            </tr>
        ";
    }
}

$employees = [];

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $position = $_POST['position'];

    // Create Object
    $emp = new Employee($name, $gender, $salary, $position);

    $employees[] = $emp;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inheritance</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

    <!-- Form -->
    <div class="card shadow p-4">

        <h2 class="text-center mb-4">Employee Form</h2>

        <form method="POST">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Gender</label>
                    <select name="gender" class="form-select">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Salary</label>
                    <input type="number" name="salary" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control">
                </div>

            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">
                Submit
            </button>

        </form>

    </div>

    <!-- Result Table -->
    <div class="card shadow p-4 mt-5">

        <h2 class="text-center mb-4">Result Table</h2>

        <table class="table table-bordered table-hover">

            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>Position</th>
                </tr>
            </thead>

            <tbody>

                <?php

                    if(!empty($employees)){

                        foreach($employees as $emp){
                            echo $emp->showEmployee();
                        }

                    }

                ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>