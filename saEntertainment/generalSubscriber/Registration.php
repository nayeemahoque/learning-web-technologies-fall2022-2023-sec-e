<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }
?>

<html>
  <head>
    <title>Registration Form</title>
  </head>
  <body>
    <table
      border="1"
      align="center"
      width="650px"
      style="border-collapse: collapse; margin-top: 20px">
      <tr>
        <td align="right">
          <a href="login.html">Login</a> | <a href="register.html">Registration</a>
        </td>
      </tr>
      <tr>
        <td style="padding: 80px">
        <form  method="post" action="registrationCheck.php" enctype="" >
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Name </td>
                    <td>:</td>
                    <td><input type="text" name="name" value=""></td>
                </tr>

                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password </td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="" /> Male
                        <input type="radio" name="gender" value= /> Female
                        <input type="radio" name="gender" value="" /> Other
                    </fieldset>
                </tr>
                <tr>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob">
                    </fieldset>
                </tr>
            </table>
            <hr>
            <input type="submit" name="btn" id="Submit">
            <input type="reset" id="Reset">
        </fieldset>
    </form></td>
      </tr>

      <tr align="center">
        <td>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>

    </table>

  </body>
</html>
