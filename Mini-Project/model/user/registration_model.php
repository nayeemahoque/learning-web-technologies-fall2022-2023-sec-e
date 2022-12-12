<?php 
    require_once(__DIR__.'/../db_conn.php');

    function insertUser($user) {
        $connection = getConnection();
        $sqlQuery = "INSERT INTO user(ID, Email, Password, Name, UserType) 
        VALUES ('{$user['id']}', '{$user['email']}', '{$user['password']}','{$user['name']}', 'user')";

        $status = mysqli_query($connection, $sqlQuery);
        mysqli_close($connection);
        return $status;
    }
