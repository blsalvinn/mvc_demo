<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
</head>
<body>
    <h3>EDIT USER</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $dataID[0]['name']?>"placeholder="Name..."></td>   
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $dataID[0]['email']?>" placeholder="Birthday..."></td>                   
                </tr>
                <tr>
                    <td>Pass</td>
                    <td><input type="text" name="pass" value="<?php echo $dataID[0]['pass']?>" placeholder="Nationality..."></td>   
                </tr>
                <tr>
                    <td>Level</td>
                    <td><input type="text" name="level" value="<?php echo $dataID[0]['level']?>" placeholder="Nationality..."></td>   
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="edit" value="EDIT" onclick="return confirm('Are you sure you want to edit?')"></td>
                </tr>
            </table>
        </form>
</body>
</html>