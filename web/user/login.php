<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon/board-game.png">
</head>

<body style="background: rgb(230, 235, 255);">
    <form
        style="width:300px;margin:0 auto;margin-top:100px; padding:100px; border:10px solid black; border-radius:10px;
            background: linear-gradient(149deg, rgb(245, 200, 102) 0%, rgb(255, 145, 0) 100%);"
        action="check-login.php" method="post">
        <table align=center>
            <tr>
                <td style="font-size: 20px">Login:</td>
                <td><input style="border-radius:5px" type="text" name="login" required/></td>
            </tr>
            <tr>
                <td style="font-size: 20px">Password:</td>
                <td><input style="border-radius:5px" type="password" name="password" required/></td>
            </tr>
            <tr>
                <td></td>
                <td><input style="border-radius:5px; font-size:17px" type="submit" class="buttons" value="Log in" required/></td>
            </tr>
        </table>
    </form>
</body>

</html>