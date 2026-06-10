<?php

class Person {
    public $id;
    public $name;
    public $age;
    public $gender;

    // Constructor
    function __construct($id, $name, $age, $gender) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    // Display Data
    function display() {
        return "
            <tr>
                <td>$this->id</td>
                <td>$this->name</td>
                <td>$this->age</td>
                <td>$this->gender</td>
            </tr>
        ";
    }
}

// POST Method
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $person = new Person($id, $name, $age, $gender);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OOP Form Bootstrap</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background: linear-gradient(135deg,#0f172a,#1e293b);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .main-card{
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .left-side{
            background: linear-gradient(135deg,#3b82f6,#06b6d4);
            color: white;
            padding: 40px;
            height: 100%;
        }

        .left-side h1{
            font-weight: bold;
        }

        .form-control{
            border-radius: 12px;
            padding: 12px;
        }

        .btn-custom{
            background: linear-gradient(135deg,#2563eb,#06b6d4);
            border: none;
            color: white;
            border-radius: 12px;
            padding: 12px;
            transition: 0.3s;
        }

        .btn-custom:hover{
            transform: translateY(-2px);
            opacity: 0.9;
        }

        table{
            border-radius: 15px;
            overflow: hidden;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="main-card">

                <div class="row g-0">

                    <!-- Left -->
                    <div class="col-lg-4">
                        <div class="left-side d-flex flex-column justify-content-center">

                            <h1 class="mb-3">
                            
                                Person Form
                            </h1>


                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-lg-8 p-4">

                        <h3 class="text-center mb-4">
                            Input Information
                        </h3>

                        <form method="POST">

                            <div class="mb-3">
                                <label class="form-label">ID</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="id"
                                    placeholder="Enter your ID"
                                    value="<?php echo $id ?? ''; ?>"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Enter your Name"
                                    value="<?php echo $name ?? ''; ?>"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="age"
                                    placeholder="Enter your Age"
                                    value="<?php echo $age ?? ''; ?>"
                                    required
                                >
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Gender</label>
                                <select class="form-control" name="gender" required>

                                    <option value="">Choose Gender</option>

                                    <option value="Male"
                                        <?php
                                            if(($gender ?? '') == 'Male'){
                                                echo 'selected';
                                            }
                                        ?>
                                    >
                                        Male
                                    </option>

                                    <option value="Female"
                                        <?php
                                            if(($gender ?? '') == 'Female'){
                                                echo 'selected';
                                            }
                                        ?>
                                    >
                                        Female
                                    </option>

                                </select>
                            </div>

                            <button type="submit" class="btn btn-custom w-100">
                                <i class="bi bi-send-fill"></i>
                                Submit
                            </button>
                        </form>

                        <!-- Table -->
                        <div class="mt-5">

                            <table class="table table-hover table-bordered text-center align-middle">

                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                        if(isset($person)){
                                            echo $person->display();
                                        }
                                    ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>