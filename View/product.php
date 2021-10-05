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
	<h4>Hi <?php echo $_SESSION['login'][0]['name'];?><?php } ?></h4><a href="?action=home_ad" style="color: #000934">HOME</a> </h5> 
<div class="container">
	<div class="row"> 
        <div class="col-md-12">
        <h4>Quan ly san pham</h4>
        <a href="?action=add_pro">ADD</a> 
             <div class="table-responsive">   
                <table id="mytable" class="table table-bordred table-striped">                 
                   <thead>
                        <td>ID</td>
                        <td>categoryID</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Introduce</td>
                        <td>Price</td>
                        <td>Create_date</td>
                        <th>Edit</th>
                        <th>Delete</th>
                   </thead>
                    <tbody>
                    
                    <?php $stt=1; 
                                foreach ($dt as $value => $key) 
                                {
                            ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $key['categoryID'] ?></td>
                                <td><?php echo $key['name'] ?></td>
                                <td><?php echo $key['img'] ?></td>
                                <td><?php echo $key['introduce'] ?></td>
                                <td><?php echo number_format($key['price'], 0, ',', '.') ?>&nbsp;VND</td>
                                <td><?php echo $key['create_date'] ?></td>
                                <td><a href="?action=edit_pro&id=<?php echo $key['id'];?>">EDIT</a></td>
                                <td><a href="?action=delete_pro&id=<?php echo $key['id'];?>">DEL</a></td>
    
                                <!-- <td><a href="?edit&id=<?php echo $key['id'];?>">EDIT</a>&nbsp;|&nbsp;<a href="?delete&id=<?php echo $key['id'];?>">DELETE</a></td> -->
                            </tr>
                            
                            <?php $stt++ ;
                                }
                            ?>
                    
                    </tbody>
        
                </table>
                <a href="?action=index" style="color: red; border-bottom: 1px red;">USER</a>&nbsp;&nbsp;       
                            
            </div>
            
        </div>
	</div>
</div>
