<html> 
    <head> 
        <title> HTML Form </title>
        <body> 
        <table>
            <td>
            <fieldset>
                <legend> <h2> LOGIN </h2> </legend>

                <form method="post" action="namecheck.php" enctype="">
                     Username: <input type="text" name="username" value=""/><br>
                     <br>
                     Password: <input type="password" name="password" value=""/> <br>
                     <hr>
                     <input type="checkbox" name="" value="" /> Remember me
                     <br><br>
                     <input type="submit" name="submit" value="Submit"/>
                     <a href="next.html" target="_blank"> Forgot password? </a>
                </form>
                <?php 
    
                     $username = $_POST['username'];
                     $password = $_POST['password'];

                     if($username == "" || $password == ""){
                     echo "invalid username/password";
                     }else if($username == $password){
                     echo "valid user";
                     }else{
                     echo "invalid user!";
                     }

                ?>
                           
            </fieldset>
        </td> 
       </table>   
        </body>
    </head>
</html>
