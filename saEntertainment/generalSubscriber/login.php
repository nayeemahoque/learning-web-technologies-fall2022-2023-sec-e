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
    <title>HTML Site</title>
</head>

<body>
    <table border="1" align="center" width="650px" style="border-collapse: collapse; margin-top: 20px">
        
        <tr height="100px" style="background-color: rgb(125, 67, 125);">
            <td width="20%" align="left">
                <img height="72" width="175" src="images/logo.png" alt="Logo">
                <h2 align="center">
                    The job is to entertain!!
                </h2>
            </td>
        </tr>
        <tr>
            
            <td style="padding: 80px">
                <form method="post" action="loginCheck.php" enctype="">

                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td>User Name </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" required></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" required></td>
                        </table>
                        <hr>
                        <table>
                            <tr><input type="checkbox">Remember Me</tr>
                            <tr><br><br></tr>
                            <tr>
                                <td>
                                    <td><input type="submit" name="btn" value="Submit"></td>
                                </td>
                                <td>
                                    <a href="changePass.html">Forgot Password?</a>
                                </td>
                            </tr>
                            
                        </table>
                    </fieldset>
                        <a href="Registration.html" align="center">
                            <h4>
                                Register Now!!
                            </h4>
                        </a>
                </form>
            </td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <footer style="margin: 10px">Copyright &copy; 2022</footer>
                </td>
            </tr>

    </table>

</body>

</html>