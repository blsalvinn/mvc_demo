<?php
include_once 'Model/connect.php';
// require_once 'Model/Interface.interface.php';
class model extends DB {
    protected $con;
    public function __construct() {
        $this->con = new DB();
    }
    public function getList()
    {
        $str="SELECT * FROM  user ";
		$data=$this->con->Select($str);
		return $data;
    }
    public function insert_tb($values){
	    $sql = "INSERT INTO user (name, email, pass, level) VALUES ('".$values['name']."', '".$values['email']."', '".md5($values['pass'])."', 
        '".$values['level']."')";
        // echo $sql;
        $this->con->execute($sql);
	}

    public function update_us($values, $id)
    {
        $sql = "UPDATE user SET name = '".$values['name']."', email = '".$values['email']."', pass ='".$values['pass']."',
        level = '".$values['level']."' 
        WHERE id='".$id."' ";     
        $this->con->execute($sql);
    }
    public function select_id($id){
		$str="SELECT * FROM  user  WHERE id='".$id."'";
		$data=$this->con->Select($str);
		return $data;
	}
    public function delete($id)
    {
        $sql = "DELETE FROM user WHERE id = '$id'";
        $this->con->execute($sql);
    }
    public function login($id){
        // if((!isset($id['email'])) &&  (!isset($id['pass']))){
           
        // }
        if((isset($id['email'])) &&  (isset($id['pass']))){
            $str="SELECT * FROM  user  WHERE email = '".$id['email']."' and   pass = '".$id['pass']."'";
            echo $str;
            $data=$this->con->Select($str);
            return $data;
        }
      
    }
    public function checkLevel($lv){
        $str = "SELECT * FROM user WHERE level like 'lv'";
        $data=$this->con->Select($str);
		return $data;
    }  
    //product 
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
        $str="SELECT * FROM  product  ORDER BY id ASC";
		$data=$this->con->Select($str);
		print_r($data);
    } 
    public function update_pro($values, $id)
    {
        $sql = "UPDATE product SET categoryID = '".$values['categoryID']."', name = '".$values['name']."', img ='".$values['img']."',
        introduce = '".$values['introduce']."', price = '".$values['price']."', create_date = '".$values['create_date']."'
        WHERE id='".$id."' ";     
        $this->con->execute($sql);
    }
    public function checkUsName($un)
    {
        $qr = "SELECT id FROM user
         WHERE name ='$un'";
        $rows  =mysqli_query($this->conn, $qr);
        $kq = '';
        if(mysqli_num_rows($rows)>0){
            $kq = 'tai khoan da ton tai';
        } 
        return $kq;
    }
}
?>