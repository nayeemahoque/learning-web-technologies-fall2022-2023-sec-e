<?php 
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $retypeNewPassword = $_POST['retypeNewPassword'];

    if($currentPassword == "" || $newPassword == "" || $retypeNewPassword == "") {
        echo "Current Password, New Password, Retype New Password cannot be empty!";
    } else if($currentPassword == $newPassword) {
        echo "New Password should not be same as the Current Password!";
    } else if($newPassword != $retypeNewPassword){
        echo "New Password must match with the Retyped Password!";
    } else {
        echo "Password changed successfully!";
    }
?>