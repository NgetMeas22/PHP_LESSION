<?php

$user =[];
$error =[];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = $_POST['fullname'] ?? '';
        $email = $_POST['email'] ?? '';
        $pw = $_POST['pw'] ?? '';
        $cpw = $_POST['cpw'] ?? '';
        //Name
        if(empty($name)){
            $error['name'] = 'Name is required';
        }else if (strlen($name) < 4){
            $error['name'] = 'Name must be at least 4 characters';
        }
        // else{
        //     $user['name'] = $name;
        // }
        // email
        if(empty($email)){
            $error['email'] = 'Email is required';
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['email'] = 'Email is invalid';
        }
        // else{
        //     $user['email'] = $email;
        // }
        // Password
        if(empty($pw)){
            $error['pw'] = 'Password is required';
        }else if (strlen($pw) < 6){
            $error['pw'] = 'Password must be at least 6 characters';
        }
        // else{
        //     $user['pw'] = $pw;
        // }
        //confirm_password
        if(empty($cpw)){
            $error['cpw'] = 'Confirm Password is required';
        }else if($cpw !== $pw){
            $error['cpw'] = 'Confirm Password is not match';
        }
        // else{
        //     $user['cpw'] = $cpw;
        // }

        if(empty($error)){
            $status = 'Success';
            $user[]=[
                ['name' => $name],
                ['email' => $email],
                ['pw' => $pw],
                ['cpw' => $cpw]
            ];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Learn About Validate Post</title>
</head>
<body>
    <main class="container">
        <div class="row d-flex justify-content-center mt-3">
           <div class=" rounded-3 border border-primary border-3 shadow-lg card col-6">
             <form method="POST" class="container mt-5 w-100 h-100 p-5">
    <h1 class=" text-danger mb-5">Register Form</h1>
        <small class=" text-success "><?= $status ?? '' ?></small>

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="fullname" value="<?php echo $name ?? '' ?>" class="form-control" placeholder="Enter your name">
        <small class=" text-danger "><?= $error['name'] ?? ''?> </small>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="<?php echo $email ?? '' ?>" class="form-control" placeholder="Enter your email">
        <small class=" text-danger "><?= $error['email'] ?? ''?> </small>
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="pw" value="<?php echo $pw ?? '' ?>" class="form-control" placeholder="Enter password">
        <small class=" text-danger "><?= $error['pw'] ?? ''?> </small>
    </div>

    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="cpw" value="<?php echo $cpw ?? '' ?>" class="form-control" placeholder="Confirm password">
        <small class=" text-danger "><?= $error['cpw'] ?? ''?> </small>
    </div>

    <button type="submit" class="btn mt-2 shadow-lg btn-primary"> Register </button>
                </form>
           </div>
        </div>
    </main>
</body>
</html>