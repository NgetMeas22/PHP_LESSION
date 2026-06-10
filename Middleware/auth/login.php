



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 400px;">
            
            <form action="../controller/authcontroller.php" method="POST">

                <h1 class="text-center mb-4 fs-2">Login</h1>

                <div class="mb-3">
                    <input type="email" name="email" placeholder="Email"
                        class="form-control" required>
                </div>

                <div class="mb-3">
                    <input type="password" name="pwd" placeholder="Password"
                        class="form-control" required>
                </div>

                <button type="submit" name="login"
                    class="btn btn-primary w-100">
                    Login
                </button>

            </form>

            <div class="text-center mt-3">
                <a href="register.php" class="text-decoration-none">
                    Register
                </a>
            </div>

        </div>
    </div>

</body>
</html>