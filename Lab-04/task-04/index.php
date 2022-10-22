<?php
	$name = "";
    $email = "";
    $username = "";
    $password = "";
    $confirmPassword = "";
	$gender = "";
	$dobDay = "";
    $dobMonth = "";
    $dobYear = "";

	if(isset($_GET['submit'])){
		$name = $_GET['name'];
        $email = $_GET['email'];
        $username = $_GET['username'];
        $password = $_GET['password'];
        $confirmPassword = $_GET['confirmPassword'];
        $gender = $_GET['gender'];
        $dobDay = $_GET['dobDay'];
        $dobMonth = $_GET['dobMonth'];
        $dobYear = $_GET['dobYear'];

        if($name == "" || $email == "" || $username == "" || $password == "" || $confirmPassword == "" || $gender == "") {
            echo "All fields are required!";
        } else if($password != $confirmPassword) {
            echo "Password and Confirm Password do not match";
        } else if($dobDay < 1 || $dobDay > 31) {
            echo "Invalid DOB day!";
        } else if($dobMonth < 1 || $dobMonth > 12) {
            echo "Invalid DOB month";
        } else if($dobYear > 2022) {
            echo "Invalid DOB year!";
        } else {
            echo "Registration successful!";
        }
	}
?>

<html>
    <head>
        <title>Registration</title>
        <style>
            input[type='number']{
                width: 60px;
            }
        </style>
    </head>
    <body>
        <table>
            <td>
                <fieldset>
                    <legend>Registration</legend>
                    <form method="get" action="#">
                        <table>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="text" name="name"  value="<?=$name?>" required/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="email" name="email"  value="<?=$email?>" required/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Username
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="text" name="username"  value="<?=$username?>" required/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="password" name="password" value="<?=$password?>" required/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Password
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="password" name="confirmPassword" value="<?=$confirmPassword?>" required/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male" <?php if("Male" == $gender){ echo "checked";} ?> required/>Male
                                        <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){echo "checked";}?> />Female
                                        <input type="radio" name="gender" value="other" <?php if($gender == 'other'){echo "checked";}?> />Other<br>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <fieldset>
                                        <legend>
                                            Date of Birth
                                        </legend>
                                        <input type="number" name="dobDay"  value="<?=$dobDay?>" required/>/
                                        <input type="number" name="dobMonth"  value="<?=$dobMonth?>" required/>/
                                        <input type="number" name="dobYear"  value="<?=$dobYear?>" required/>
                                        <i>(dd/mm/yy)</i>
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Submit"/>
                    </form>
                </fieldset>
            </td>
        </table>
    </body>
</html>
