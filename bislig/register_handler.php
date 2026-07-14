<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>
                alert('Email already exists!');
                window.location='register.php';
              </script>";
        exit();
    }

    // Encrypt password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Default role = tourist
    $role = "tourist";

    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password, role)
                            VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $full_name, $email, $hashedPassword, $role);

    if ($stmt->execute()) {

        echo "<script>
                alert('Registration Successful!');
                window.location='login.php';
              </script>";

    } else {

        echo "<script>
                alert('Registration Failed!');
                window.location='register.php';
              </script>";
    }

    $stmt->close();
    $check->close();
}

$conn->close();

?>