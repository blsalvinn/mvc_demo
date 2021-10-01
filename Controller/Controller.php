<?php
session_start();
include_once 'Model/model.php';
include_once 'config/session.php';
class Controller{
    // public $model;
    public function __construct() {
        $this->model = new Model();
    }


    public function App()
    {
        if(isset($_GET['view'])){
        $dt = $this->model->getList();
        // print_r($dt);
        include_once 'View/Home.php';
        }
        if(isset($_GET['page'])){
        // print_r($dt);
        include_once 'View/Page.php';
        }if(isset($_GET['edit'])){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // $tblTable = "user";
            $dataID = $this->model->select_id($id);
            print_r($dataID);
            // echo $dataID[0]['name'];
            if(isset($_POST['edit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $level = $_POST['level'];
                $this->model->update_us($_POST, $id);
                header ('Location: ?view');
            } 
        } require_once 'View/Pages/edit_user.php';
        }if(isset($_GET['getid'])){
           $str="SELECT * FROM  user ";
           $dt = $this->model->checkNum($str);
           return $dt;
        }
        if(isset($_GET['add'])){
            include_once 'View/Pages/add_user.php';
            if(isset($_POST['add_user'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                // $pass = password_hash($pass, PASSWORD_DEFAULT);
                $level = $_POST['level'];
                $this->model->insert_tb($_POST);
                header('Location: ?view');
            }
            require_once 'View/Pages/add_user.php';
        }
        
        if(isset($_GET['delete'])){
            if(isset($_GET['id'])){
            // $id = $_GET['id'];
            $this->model->delete($_GET['id']);
            header('Location: ?view');
            }require_once 'View/Home.php';      
        }
        if(isset($_GET['login'])){
            include_once "View/Pages/login.php";
            if(isset($_POST['login_'])){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                // $password = md5($password);
                if($data=$this->model->login($_POST)){
                    Session::session_set("login",$data);
                    // echo $_SESSION['login'][0]['email'];
                    include 'View/Page.php';
                if($data[0]['level']==0){
                    header('location: ?view');
                }if($data[0]['level']==1){
                    header('location: ?page');
                }
                }
            }require_once "View/Pages/login.php"; 
        }
    }
}
?>