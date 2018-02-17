<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktek 11-6</title>
</head>
<body> 
    <form id="form1" name="form1" enctype="multipart/form-data" action="menu.php" method="post">
    <center style="font-size:24px"> Masukkan Username dan Password</center>
    <br>
    <table style="font-size:16px;color:maroon;" align="center" border="0" width="100">
        <tr>
            <td width="150" style="font-size:20px">Username</td>
            <td><input type="text" name="username" id="username" style="font-size:16px" size="20"></td>
        </tr>
        <tr>
            <td width="150" style="font-size:20px">Password</td>
            <td><input type="password" name="password" id="password" style="font-size:16px" size="20"></td>
        </tr>
        <tr></tr>
        <tr>
            <td align="center" width="200" colspan="7">
            <input class="button_login" type="submit"
            style="font-size:16px" name="submit" id="submit" value="Login">&nbsp;
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
