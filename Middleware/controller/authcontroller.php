
<?php
    require_once "../db.php";
    
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $register = $conn->query("INSERT INTO users (username, email, pwd) VALUES ('$username', '$email', '$pwd')");


            if($register){
                header("Location: ../auth/login.php");
            }else{
                header("Location: ../auth/register.php");
            }
    
    }


?>