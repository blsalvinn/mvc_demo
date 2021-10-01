<?php 
 include_once 'config/session.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<h2>
	<table border="1px">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>Level</td>
			<td>Action</td>
		</tr>
		<tbody>
			<?php $stt=1; 
				foreach ($dt as $value => $key) 
				{
			?>
			<tr>
				<td><?php echo $stt ?></td>
				<td><?php echo $key['name'] ?></td>
				<td><?php echo $key['email'] ?></td>
				<td><?php echo $key['pass'] ?></td>
				<td><?php echo $key['level'] ?></td>
				<td><a href="?edit&id=<?php echo $key['id'];?>">EDIT</a>&nbsp;|&nbsp;<a href="?delete&id=<?php echo $key['id'];?>">DELETE</a></td>
			</tr>
			
			<?php $stt++ ;
				}
			?>
			<h4>Hi <?php echo $_SESSION['login'][0]['name'];?></h4>
			<a href="?add">ADD</a>	&nbsp;
			<a href="?login">LOGIN</a>	
		</tbody>
	</table>
		
</h2>
</body>
</html>