<?php
require_once 'config/config.php';
class DB{

    public $conn;
    private $result = null;
    function __construct(){
		$this->connect();
    }
	public function connect()
	{
		$this->conn=new mysqli(host,user,pass,db) or die("Lỗi");
		mysqli_set_charset($this->conn,'utf8');
	}
	
	public function close(){
		if ($this->conn != null) {
			mysqli_close($this->conn);
		}
	}
	public function execute($sql){
		$this->result = $this->conn->query($sql);

		return $this->result;
	}
    public function Select($str)
	{
		$result=$this->conn->query($str);
		if ($result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function Create_Update_tb($str)
	{
		$result=$this->conn->query($str);
	}

}
?>
    