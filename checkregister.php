<?php
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $roll_no = trim($_POST['roll_no']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Check for empty fields
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($roll_no)) {
        header("Location: register.php?error=empty");
        exit();
    }

    // Check password confirmation
    if ($password !== $confirm_password) {
        header("Location: register.php?error=password");
        exit();
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE roll_no = :roll_no");
    $stmt->execute([
        'roll_no' => $roll_no
    ]);

    if ($stmt->rowCount() > 0) {
        header("Location: register.php?error=rolltaken");
        exit();
    }

    try {

        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->execute([
            'email' => $email
        ]);

        if ($stmt->rowCount() > 0) {
            header("Location: register.php?error=exists");
            exit();
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user
        $insertStmt = $conn->prepare("
        INSERT INTO users (name, roll_no, email, password)
        VALUES (:name, :roll_no, :email, :password)
        ");

        $insertStmt->execute([
            'name' => $name,
            'roll_no' => $roll_no,
            'email' => $email,
            'password' => $hashedPassword
        ]);

        header("Location: login.php?signup=success");
        exit();

    } catch (PDOException $e) {

        die("Database Error: " . $e->getMessage());

    }

} else {

    header("Location: register.php");
    exit();

}