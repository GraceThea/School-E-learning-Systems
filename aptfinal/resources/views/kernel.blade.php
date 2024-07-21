<?php 
session_start();

include_once('config.php');
include_once('connection.php');

spl_autoload_register(function($class){
    if(file_exists('controller/'.$class.'.php')){
        require'controller/'.$class.'.php';
    }
    if(file_exists('model/'.$class.'.php')){
        require 'model/'.$class.'.php';
    }
});

$db= connection::connect($config);

$load_new = new homeController();
$model = new homeModel();
$load_new ->model=$model;
$model->db =$db;
