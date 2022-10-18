<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sth = strpos($username, "1");
    echo $sth;

    echo "\n";

    if($username == "" || $password == "") {
        echo "Username or password cannot be empty!";
    } else if(preg_match('/^[A-Za-z0-9.-_]+$/',$username) === false) {
        echo "Username can contain alpha numeric characters, period, dash or underscore only";
    } else if(strlen($username) < 2){
        echo "Username must contain at least two (2) characters!";
    } else if(strlen($password) < 8){
        echo "Password must not be less than eight (8) characters!";
    } else if(strpos($password, "@") === false && 
            strpos($password, "#") === false && 
            strpos($password, "$") === false && 
            strpos($password, "%") === false) {
        echo "Password must contain at least one of the special characters (@, #, $, %)";
    } else {
        echo "Valid user!";
    }
?>
