<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>        
</head>
<body>
    <h3>Login</h3>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Email:</td> 
            <td><input type="text"  name="email" value="" ></td>
        </tr>
        <tr>
            <td></td>
            <td><?php if(empty($_POST["email"])){echo $emailErr;} ?></td>
        </tr>
        <tr>
            <td>Pass:</td> 
            <td><input type="text" name="pass"></td>
        </tr>
        <tr>
            <td></td>
            <td><?php if(empty($_POST["pass"])){echo $passErr;} ?>
        </tr>
    </table>
    <input type="submit" name="login_" value="Login">
    </form>
</body>
</html>