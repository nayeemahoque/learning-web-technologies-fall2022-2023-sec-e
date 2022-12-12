<?php
require_once(__DIR__ . '/../model/login_model.php');

$id = $_POST['id'];
$password = $_POST['password'];

if ($id == null || $id == "") {
    echo "User ID is required";
} else if ($password == null || $password == "") {
    echo "Password is required";
} else {
    $user = ['id' => $id, 'password' => $password];
    $userData = authenticateUser($user);

    if ($userData != null) {
        session_start();
        $_SESSION['userID'] = $userData['ID'];
        $_SESSION['userType'] = $userData['UserType'];

        if ($userData['UserType'] == 'user') {
            header("Location: ../view/user/home.php");
        } else if ($userData['UserType'] == 'admin') {
            header("Location: ../view/admin/home.php");
        } else {
            header("Location: ../index.php");
        }
    } else {
        echo "User not found";
    }
}
