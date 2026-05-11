<?php

    $profiles =[
         [
        "name" => "Declan Rice",
        "major" => "IT",
        "project" => "School System",
        "followers" => 1200,
        "following" => 300,
        "image" => "https://i.pinimg.com/736x/92/ed/eb/92edeb0d2034ee8b82014b7d73e4f8bf.jpg"
    ],
         [
        "name" => "Phil Foden",
        "major" => "Design",
        "project" => "Portfolio Website",
        "followers" => 1200,
        "following" => 300,
        "image" => "https://i.pinimg.com/736x/34/03/15/340315d697f95d070e074b864702b807.jpg"
    ],
         [
        "name" => "Vanda",
        "major" => "Cyber Security",
        "project" => "Security App",
        "followers" => 2000,
        "following" => 500,
        "image" => "https://i.pinimg.com/1200x/38/67/17/386717858a3e606b43458e4e5e8a6a27.jpg"
    ],
         [
        "name" => "Declan Rice",
        "major" => "IT",
        "project" => "School System",
        "followers" => 1200,
        "following" => 300,
        "image" => "https://i.pinimg.com/736x/92/ed/eb/92edeb0d2034ee8b82014b7d73e4f8bf.jpg"
    ],
         [
        "name" => "Phil Foden",
        "major" => "Design",
        "project" => "Portfolio Website",
        "followers" => 1200,
        "following" => 300,
        "image" => "https://i.pinimg.com/736x/34/03/15/340315d697f95d070e074b864702b807.jpg"
    ],
         [
        "name" => "Vanda",
        "major" => "Cyber Security",
        "project" => "Security App",
        "followers" => 2000,
        "following" => 500,
        "image" => "https://i.pinimg.com/1200x/38/67/17/386717858a3e606b43458e4e5e8a6a27.jpg"
    ],
    ]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Associative Array</title>
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row g-4">
        <?php foreach($profiles as $profile): ?>
        <div class="col-md-4">
            <div class="card shadow text-center p-4 h-100">
                <img src="<?= $profile['image'] ?>"
                     class="rounded-circle mx-auto mb-3 object-fit-cover"
                     width="100"
                     height="100">
                <h4><?= $profile['name'] ?></h4>
                <p class="text-muted">
                    <?= $profile['major'] ?>
                </p>
                <p>
                    <strong>Project:</strong><br>
                    <?= $profile['project'] ?>
                </p>
                <div class="d-flex justify-content-around mt-3">
                    <div>
                        <h5><?= $profile['followers'] ?> K</h5>
                        <small>Followers</small>
                    </div>
                    <div>
                        <h5><?= $profile['following'] ?> K</h5>
                        <small>Following</small>
                    </div>
                </div>
                <div class="mt-3 fs-4">

                    <i class="bi bi-facebook me-3 text-primary"></i>
                    <i class="bi bi-tiktok me-3"></i>
                    <i class="bi bi-instagram text-danger"></i>
                </div>
                
                <button class=" btn btn-primary mt-3">View profile</button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>