<?php 
 include_once 'config/session.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>This is page for user</title>
</head>
<body>
<h2>
    <h4>Hi <?php echo $_SESSION['login'][0]['name'];?></h4>		
</h2>
</body>
</html>