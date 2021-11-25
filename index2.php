<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div >
    <form action="validation.php" method="post">
        <table style="margin-left: auto; margin-right:auto;">
            <tr>
                <td colspan="2" style="text-align: center;">
                    <h2>Login</h2>
                </td>
            </tr>
            <tr>
                <td><label for="uname">Username</label></td>
                <td><input type="text" name="usn" id="uname"></td>
            </tr>  
            <tr>
                <td><label for="Password">Password</label></td>
                <td><input type="password" name="pw" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>Not a member yet? <a href="index.php">Register here</a></p>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
