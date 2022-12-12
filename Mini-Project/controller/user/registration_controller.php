<?php
    require_once(__DIR__.'/../../model/user/registration_model.php');
    
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $name = $_POST['name'];
    

    if($id == null || $id == "") {
        echo "ID is required";
    } else if($email == null || $email == "") {
        echo "Email is required";
    }else if($password == null || $password == "") {
        echo "Password is required";
    } else if($confirmPassword == null || $confirmPassword == "") {
        echo "Confirm Password is required";
    } else if($name == null || $name == "") {
        echo "Name is required";
    }
    else {
        $user = ["id"=>$id, "email"=>$email, "password"=>$password, "confirmPassword"=>$confirmPassword, "name"=>$name];
        $status = insertUser($user);

        if($status)
        {
            echo $status;
            header("Location: ../../index.php");
        }
        else 
        {
             echo "Failed to save user in database";
        }
    }
?>