<!-- <?php
include 'connect.php';
class model_product extends DB {
    public $con =null;
    public function __construct() {
        $this->con = new DB();
    }
    public function getList_pro()
    {
        $str="SELECT * FROM  product ";
		$data=$this->con->Select($str);
		return $data;
    }
    public function insert_tb_pro($values){
	    $sql = "INSERT INTO `product`(`categoryID`, `name`, `img`, `introduce`, `price`, `create_date`)
         VALUES ('".$values['categoryID']."', '".$values['name']."', '".$values['img']."','".$values['introduce']."', '".$values['price']."',
        '".$values['create_date']."')";
        // echo $sql;
        $this->con->execute($sql);
	}

    public function update_us_pro($values, $id)
    {
        $sql = "UPDATE product SET categoryID = '".$values['categoryID']."', name = '".$values['name']."', img = '".$values['img']."', introduce ='".$values['introduce']."',
        price = '".$values['price']."',  create_date = '".$values['create_date']."'  
        WHERE id='".$id."' ";     
        $this->con->execute($sql);
    }
    public function select_id_pro($id){
		$str="SELECT * FROM  product  WHERE id='".$id."'";
		$data=$this->con->Select($str);
		return $data;
	}
    public function delete_pro($id)
    {     
        $sql = "DELETE FROM product WHERE id = '$id'";
        $this->con->execute($sql);
    }  
    public function select_tb_pro()
    {
        echo 123;
        // $str="SELECT * FROM  product  ORDER BY id ASC";
		// $data=$this->con->Select($str);
		// print_r($data);
    }
}
?> -->