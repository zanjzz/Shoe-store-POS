<?php
session_start();
require_once 'config.php';

/* =========================
   REGISTER
========================= */
if (isset($_POST['register'])) {

    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $status = "Active"; 

    $stmt = $conn->prepare("SELECT User_ID FROM users WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['register_error'] = 'Username already exists.';
        $_SESSION['active_form'] = 'register';
    } else {
       $stmt = $conn->prepare("
            INSERT INTO users (Username, Password, Full_Name, Role, Status) 
            VALUES (?, ?, ?, ?, ?)
        ");

        $stmt->bind_param("sssss", $username, $password, $fullname, $role, $status);
        $stmt->execute();
    }

    header("Location: login_register.php");
    exit();
}

/* =========================
   LOGIN
========================= */
if (isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['Password'])) {
            $_SESSION['username'] = $user['Username'];
            $_SESSION['fullname'] = $user['Full_Name'];

            if ($user['Role'] === 'Administrator') {
                header("Location: index.php");
            } elseif ($user['Role'] === 'Manager') {
                header("Location: index.php");
            } else {
                header("Location: point_of_sale.php");
            }
            exit();
        }
    }

    $_SESSION['login_error'] = 'Incorrect username or password.';
    $_SESSION['active_form'] = 'login';
    header("Location: login_register.php");
    exit();
}
?>