<?php
 include_once 'config/session.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<?php if(isset($_SESSION['login']) && $_SESSION['login'][0]['level'] == 1) {?>	
	<h4>Hi <?php echo $_SESSION['login'][0]['name'];?><?php } ?></h4>&nbsp; &nbsp;  <h5> <a href="?action=home_ad">HOME</a> </h5> 
<div class="container">
	<div class="row"> 
        <div class="col-md-12">
        <h4>Quan ly user</h4>
			<a href="?action=add">ADD</a>	&nbsp;
		    <a href="?action=logout">LOGOUT</a>	  
             <div class="table-responsive">   
                <table id="mytable" class="table table-bordred table-striped">                 
                   <thead>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Level</td>
                        <td>Action</td>
                   </thead>
                    <tbody>
                    
                    <?php $stt=1; 
                                foreach ($dt as $value => $key) 
                                {
                            ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $key['name'] ?></td>
                                <td><?php echo $key['email'] ?></td>
                                <td><?php echo $key['level'] ?></td>
                                <td><a href="?action=edit&id=<?php echo $key['id'];?>">EDIT</a>&nbsp;|&nbsp;<a href="?action=delete&id=<?php echo $key['id'];?>">DELETE</a></td>
			
                                <!-- <td><a href="?edit&id=<?php echo $key['id'];?>">EDIT</a>&nbsp;|&nbsp;<a href="?delete&id=<?php echo $key['id'];?>">DELETE</a></td> -->
                            </tr>
                            
                            <?php $stt++ ;
                                }
                            ?>
                    </tbody>
                </table>          
            </div>
            <a href="?action=product" style="color: red;">PRODUCT</a>
        </div>
	</div>
</div>