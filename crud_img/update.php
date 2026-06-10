<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit();
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = trim($_POST['name'] ?? '');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
$qty = filter_input(INPUT_POST, 'qty', FILTER_VALIDATE_INT);
$des = trim($_POST['des'] ?? '');

if (!$id || $name === '' || $price === false || $qty === false || $des === '') {
    header('Location: index.php');
    exit();
}

$stmt = $conn->prepare('SELECT p_img FROM products WHERE p_id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$product) {
    header('Location: index.php');
    exit();
}

$newImage = $product['p_img'];

if (!empty($_FILES['img']['name'])) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $imageType = mime_content_type($_FILES['img']['tmp_name']);

    if (!in_array($imageType, $allowedTypes, true)) {
        header('Location: form_update.php?id=' . $id);
        exit();
    }

    $extension = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
    $newImage = time() . '_' . bin2hex(random_bytes(4)) . '.' . $extension;
    $path = 'images/' . $newImage;

    if (!move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
        header('Location: form_update.php?id=' . $id);
        exit();
    }

    $oldPath = 'images/' . $product['p_img'];
    if (!empty($product['p_img']) && file_exists($oldPath)) {
        unlink($oldPath);
    }
}

$stmt = $conn->prepare('
    UPDATE products
    SET p_name = ?, p_price = ?, p_qty = ?, p_img = ?, p_description = ?
    WHERE p_id = ?
');
$stmt->bind_param('sdissi', $name, $price, $qty, $newImage, $des, $id);
$updated = $stmt->execute();
$stmt->close();
$conn->close();

if ($updated) {
    header('Location: index.php');
    exit();
}

header('Location: form_update.php?id=' . $id);
exit();
