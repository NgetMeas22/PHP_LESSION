<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg border-0 rounded-4" style="width: 450px;">
            <div class="card-body p-5">

                <h1 class="text-center mb-4 fw-bold">Register</h1>

                <form action="../controller/authcontroller.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text"
                               name="username"
                               placeholder="Enter username"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               placeholder="Enter email"
                               class="form-control">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               placeholder="Enter password"
                               class="form-control">
                    </div>

                    <button type="submit"
                            name="register"
                            class="btn btn-success w-100">
                        Register
                    </button>

                </form>

                <p class="text-center mt-3 mb-0">
                    Already have an account?
                    <a href="logon.php" class="text-decoration-none">
                        Login
                    </a>
                </p>

            </div>
        </div>
    </div>

</body>
</html>