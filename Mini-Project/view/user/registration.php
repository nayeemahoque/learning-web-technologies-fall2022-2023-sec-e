<?php
   
?>

<html>

<head>
  <title>User Registration</title>
  <link rel="stylesheet" href="../../assets/style.css">
  <script src="../../script/user/registration.js"></script>
</head>

<body>
  <table class="container-table">
    <tr>
      <td class="w-20"></td>
      <td class="w-15"></td>
      <td class="w-30">
        <form id="registration_form" method="post" action="../../controller/user/registration_controller.php">
          <fieldset>
            <legend>USER REGISTRATION</legend>
            <table>
            <tr>
                <td>ID </td>
                <td>:</td>
                <td>
                  <input type="text" id="id" name="id" value="" onblur="validateID()" required></td>
              </tr>
              <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="" onblur="validateEmail()" required></td>
              </tr>
              <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="" onblur="validatePassword()" required></td>
              </tr>
              <tr>
                <td>Confirm Password </td>
                <td>:</td>
                <td><input type="password" id="confirmPassword" name="confirmPassword" onblur="validateConfirmPassword()" required></td>
              </tr>
              <tr>
                <td>Name </td>
                <td>:</td>
                <td>
                  <input type="text" id="name" name="name" value="" onblur="validateName()" required></td>
              </tr>
            </table>
            <hr>
            <input type="submit" id="submit" name="submit" value="Register">
            <input type="button" id="reset" name="reset" value="Reset" onclick="resetRegistration()">
            <a href="../../index.php">
            <span>
                Login
            </span>
            </a>
          </fieldset>
        </form>
      </td>
      <td class="w-15"></td>
      <td class="w-20"></td>
    </tr>
  </table>
</body>
<footer>
    <table class="footer-bar">
        <tr align="center">
            <td class="w-20"></td>
            <td class="w-20">
            </td>
            <td class="w-20">
            </td>
            <td class="w-20">
            </td>
            <td class="w-20"></td>
        </tr>
    </table>
</footer>

</html>