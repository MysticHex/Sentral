<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div>
        <form action="server.php"  method="post" autocomplete="off">
            <table style="margin-left: auto; margin-right:auto;">
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <h2>Register</h2>
                    </td>
                </tr>
                <tr>
                    <td><label for="uname">Username</label></td>
                    <td><input type="text" name="uname" id=""></td>
                </tr>
                <tr>
                    <td><label for="Password">Password</label></td>
                    <td><input type="password" name="pw" id=""></td>
                </tr>
                <tr>
                    <td><label for="pass">Password Confirmation</label></td>
                    <td><input type="password" name="pw2" id="pass"></td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit" name="register">Register</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>Already a member? <a href="index2.php">Login here</a></p>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>