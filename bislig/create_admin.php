<?php
include 'db.php';

$name = "Administrator";
$email = "admin@bislig.com";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (full_name, email, password, role)
VALUES (?, ?, ?, 'admin')";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $password);

if ($stmt->execute()) {
    echo "Admin account created!";
} else {
    echo "Error: " . $stmt->error;
}
?>