<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: login.php?error=Please fill in all fields");
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['role'] = $user['role'];

            header("Location: Travel-Guide-Information.php");
            exit();

        } else {
            header("Location: login.php?error=Incorrect password");
            exit();
        }

    } else {
        header("Location: login.php?error=Account not found");
        exit();
    }
}
?>