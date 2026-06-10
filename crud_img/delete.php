<?php
require_once 'db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: index.php');
    exit();
}

$stmt = $conn->prepare('SELECT p_img FROM products WHERE p_id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();
$stmt->close();

if ($product) {
    $stmt = $conn->prepare('DELETE FROM products WHERE p_id = ?');
    $stmt->bind_param('i', $id);
    $deleted = $stmt->execute();
    $stmt->close();

    $imagePath = 'images/' . $product['p_img'];
    if ($deleted && !empty($product['p_img']) && file_exists($imagePath)) {
        unlink($imagePath);
    }
}

$conn->close();
header('Location: index.php');
exit();
