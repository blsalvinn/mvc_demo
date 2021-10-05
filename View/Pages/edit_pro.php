<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
</head>
<body>
    <h3>EDIT PRODUCT</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>CategoryID:</td>
                    <td><input type="text" name="categoryID" value="<?php echo $dataID[0]['categoryID']?>"placeholder="Name..."></td>   
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $dataID[0]['name']?>" placeholder="name..."></td>                   
                </tr>
                <tr>
                    <td>Img</td>
                    <td style="width: 100px;"><input type="file" accept=".png, .jpg, .jpeg" name="img" src="View/style/img/<?php echo $dataID[0]['img']?>" value="" placeholder="img..."></td>   
                </tr>
                <tr>
                    <td>Introduce</td>
                    <td><input type="text" name="introduce" value="<?php echo $dataID[0]['introduce']?>" placeholder="introduce..."></td>   
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value="<?php echo $dataID[0]['price']?>" placeholder="price..."></td>   
                </tr>
                <tr>
                    <td>Create_date</td>
                    <td><input type="date" name="create_date" value="<?php echo $dataID[0]['create_date']?>" placeholder="create_date..."></td>   
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="edit_pro" value="EDIT" onclick="return confirm('Are you sure you want to edit?')"></td>
                </tr>
            </table>
        </form>
</body>
</html>