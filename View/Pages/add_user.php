<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD USER</title>
</head>
<body>
    <h3>ADD USER</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Name..."></td>   
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"  placeholder="Email..."></td>                   
                </tr>
                <tr>
                    <td>Pass</td>
                    <td><input type="text" name="pass" placeholder="Pass..."></td>   
                </tr>
                <tr>
                    <td>Level</td>
                    <td><input type="text" name="level" placeholder="Level..."></td>   
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="add_user" value="ADD" onclick="return confirm('Are you sure you want to add user?')"></td>
                </tr>
            </table>
        </form>
</body>
</html>