<?php
session_start();
include_once 'Model/model.php';
// include_once 'Model/model_product.php';
include_once 'config/session.php';
include_once 'config/router.php';
class Controller{
    private $model;
    private $pro;
    public function __construct() {
        $this->model = new Model();
        // $this->pro = new model_product();
    }


    public function App()
    {   
        if(isset($_GET['action'])){
        $action = $_GET['action'];
        
         switch($action){
            case 'index':
                 $dt = $this->model->getList();
                // print_r($dt);
                include_once 'View/index.php';
                break;
            case 'product':
                $dt = $this->model->getList_pro();
                // print_r($dt);
                include_once 'View/product.php';
                break;
            // case 'product_home':
            //     $data = $this->model->getList_pro();
            //     print_r($data);
            //     include_once 'View/Page.php';
            //     break;
            case 'home_ad':
                if(isset($_SESSION['login'])){
                    include_once 'View/Page.php';
                }
                break;
            case 'page':
                $data = $this->model->getList_pro();
                include_once 'View/Page.php';
                break;
            case 'edit':
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        // $tblTable = "user";
                        $dataID = $this->model->select_id($id);
                        // print_r($dataID);
                        // echo $dataID[0]['name'];
                        if(isset($_POST['edit'])){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $pass = $_POST['pass'];
                            $level = $_POST['level'];
                            $this->model->update_us($_POST, $id);
                            header ('Location: ?action=index');
                        } require_once 'View/Pages/edit_user.php';
                    } 
                break;
            case 'add':
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
                break;
            case 'delete':
                if(isset($_GET['id'])){
                    // $id = $_GET['id'];
                    $this->model->delete($_GET['id']);
                    header('Location: ?action=view');
                    }require_once 'View/Home.php';  
                break;
            case 'login':
                if($dt=$this->validate()){
                    return $dt;
                } 
                $emailErr = 'Input Email';
                $passErr = 'Input Pass';
                include_once "View/Pages/login.php";
                if(isset($_POST['email']) &&  $_POST['pass']){
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $pass = md5($pass);
                }
                if($data=$this->model->login($_POST)){
                    Session::session_set("login",$data);
                    // echo $_SESSION['login'][0]['email'];
                    // include 'View/Page.php';
                    if($data[0]['level']==1){
                        header('location: ?acion=index');
                        break;
                    }if($data[0]['level']==0){
                        header('location: ?action=page');
                        break;
                    }
                }require_once "View/Pages/login.php"; 
                break;
            case'logout':
                Session::session_delete("login");			
                header('location: ?action=page');
                break;
                // header('location: index.php'.url_admin);
            case 'edit_pro':
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        // $tblTable = "user";
                        $dataID = $this->model->select_id_pro($id);
                        // print_r($dataID);
                        // echo $dataID[0]['name'];
                        if(isset($_POST['edit_pro'])){
                            $categoryID = $_POST['categoryID'];
                            $name = $_POST['name'];
                            $img = $_POST['img'];
                            $introduce = $_POST['introduces'];
                            $price = $_POST['price'];
                            $create_date = $_POST['create_date'];
                            $this->model->update_pro($_POST, $id);
                            header ('Location: ?action=product');
                        } require_once 'View/Pages/edit_pro.php';
                    } 
                break;
            case 'add_pro':
                include_once 'View/Pages/add_pro.php';
                    if(isset($_POST['add_pro'])){
                        $categoryID = $_POST['categoryID'];
                        $name = $_POST['name'];
                        $img = $_POST['img'];
                        $introduce = $_POST['introduces'];
                        $price = $_POST['price'];
                        $create_date = $_POST['create_date'];
                        $this->model->insert_tb_pro($_POST);
                        header('Location: ?action=product');
                    }
                    require_once 'View/Pages/add_pro.php';   
                break;
            case 'delete_pro':
                if(isset($_GET['id'])){
                    // $id = $_GET['id'];
                    $this->model->delete_pro($_GET['id']);
                    header('Location: ?action=product');
                    }require_once 'View/product.php';  
                break;
            default:
            echo '404 not found page!!';
            break;
        }   
    }
    else {
        new router();
        //  include_once 'View/HomePage.php';
     }
    }

    public function validate()
    {   
        $error = array();
        $email = $_POST['email'];
        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
            echo $error = "loi dinh dang email "." '" .'abc@123.xyz'."'" ;
        }
    }
}
?>