<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: form_insert.php');
    exit();
}

$name = trim($_POST['name'] ?? '');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$qty = filter_input(INPUT_POST, 'qty', FILTER_VALIDATE_INT);
$des = trim($_POST['des'] ?? '');

if ($name === '' || $price === false || $qty === false || $des === '' || empty($_FILES['img']['name'])) {
    header('Location: form_insert.php');
    exit();
}

$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
$imageType = mime_content_type($_FILES['img']['tmp_name']);

if (!in_array($imageType, $allowedTypes, true)) {
    header('Location: form_insert.php');
    exit();
}

$extension = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
$newImage = time() . '_' . bin2hex(random_bytes(4)) . '.' . $extension;
$path = 'images/' . $newImage;

if (!move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
    header('Location: form_insert.php');
    exit();
}

$stmt = $conn->prepare('INSERT INTO products (p_name, p_price, p_qty, p_img, p_description) VALUES (?, ?, ?, ?, ?)');
$stmt->bind_param('sdiss', $name, $price, $qty, $newImage, $des);
$inserted = $stmt->execute();
$stmt->close();
$conn->close();

if ($inserted) {
    header('Location: index.php');
    exit();
}

header('Location: form_insert.php');
exit();
