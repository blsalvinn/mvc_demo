<?php
include_once 'Model/connect.php';
class model extends DB{
    public $con =null;
    public function __construct() {
        $this->con = new DB();
        // $this->con = $this->con->conn;
    }
    public function getList()
    {
        $str="SELECT * FROM  user ";
		$data=$this->con->Select($str);
		return $data;
        // $qr = "SELECT * FROM user";
            
        // $result=$this->con->query($qr);
		// if ($result->num_rows==0) {
		// 	$data=0;
		// }else{
		// 	while ($row=$result->fetch_assoc()) {
		// 		$data[]=$row;
		// 	}
		// }
        // return $data;
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
        // echo $values['name'].$values['email'].$values['pass'].$values['level'];
        // echo  $sql;
        
        $this->con->execute($sql);
        # code...
    }
    public function select_id($id){
		$str="SELECT * FROM  user  WHERE id='".$id."'";
		$data=$this->con->Select($str);
		return $data;
	}
    public function delete($id)
    {
        $sql = "DELETE FROM user WHERE id = '$id'";
        // echo $sql;
        // return $this->execute($sql);
        $this->con->execute($sql);
        # code...
    }
    public function login($id){
        $str="SELECT * FROM  user  WHERE email = '".$id['email']."' and   pass = '".$id['pass']."'";
		$data=$this->con->Select($str);
		return $data;
    }
    public function checkLevel($lv){
        $str = "SELECT * FROM user WHERE level like 'lv'";
        $data=$this->con->Select($str);
		return $data;
    }   
}
?>