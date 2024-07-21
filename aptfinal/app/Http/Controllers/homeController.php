<?php 
session_start();
class homeController{
    public $model;

    public function indexAction(){
        if(isset($_POST['LogIn Submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $checkUserLogin = $this->model->CheckUserLogin($username,$password);
            if($checkUserLogin==1){
                $_SESSION['userLogin']=1;
            }
        }
        $this->routeManager();
    }
    public function routeManager(){
        if(isset($_SESSION['userLogIn'])){
            return require_once('views/dashboard.php');
        }
        return require_once('views/login.php');
    }
}