<?php 
class homeModel{
    public $db;

    public function CheckUserLogin($username,$password){
        $query ="SELECT * FROM tbl_user WHERE username={$username}'AND password='{$password}'";
        $stmt = $this->db->prepare($query)->execute();
        return $stmt;
    }
}