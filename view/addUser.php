<?php
include "../model/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='./images/assets/favicon.png'>
    <title>Add a new user</title>
</head>
<body background="../images/assets/background.jpg">
    <?php include('./header.php'); ?>
    <div width='100px'>
        <form action='../controller/regcheck.php' method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>
                    <b>REGISTRATION</b>
                </legend>
                <table align="center">
<!--                    <tr>
                        <td align="right">Id:</td>
                        <td><input type='number' name='id'/></td>
                    </tr> -->
                    <tr>
                        <td align="right">Full Name:</td>
                        <td><input type='text' name='fullname'/></td>
                    </tr>
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type='email' name='email'/></td>
                    </tr>
                    <tr>
                        <td align="right">Phone:</td>
                        <td><input type='text' name='phone' value="+88"/></td>
                    </tr>
                    <tr>
                        <td align="right">Date of Birth:</td>
                        <td><input type='date' name='dateOfBirth'/></td>
                    </tr>
                    <tr>
                        <td align="right">Username:</td>
                        <td><input type='text' name='username'/></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type='password' name='password'/></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm Password:</td>
                        <td><input type='password' name='confirmpassword'/></td>
                    </tr>
                    <tr>
                        <td align="right">Registration date:</td>
                        <td><input type='date' name='regdate' required/></td>
                    </tr>
                    <tr>
                        <td align="right">Image:</td>
                        <td><input type='file' name='f1'/></td>
                    </tr>
                    <tr>
                        <td align="right">Type:</td>
                        <td><input type='text' name='type' value = 'admin' readonly/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='submit' name = 'submit' value="Confirm Registration"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type='reset' value="Reset"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>