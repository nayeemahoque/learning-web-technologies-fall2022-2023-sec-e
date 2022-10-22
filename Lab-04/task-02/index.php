<html> 
    <head> 
        <title>Change Password</title>
        <body> 
            <table>
                <td>
                    <fieldset>
                        <legend>
                            <h2>Change Password</h2>
                        </legend>
                        <form method="post" action="validation.php" enctype="">
                            <table>
                                <tr>
                                    <td>
                                        Current Password
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="password" name="currentPassword" value=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        New Password
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="password" name="newPassword" value=""/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Retype New Password
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <input type="password" name="retypeNewPassword" value=""/>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <input type="submit" name="submit" value="Submit"/>
                        </form>           
                    </fieldset>
                </td> 
            </table>   
        </body>
    </head>
</html>
