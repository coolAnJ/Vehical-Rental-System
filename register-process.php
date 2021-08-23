<?php  
ob_start();
session_start();

require('inc/config.php');
require('inc/db.php');
require('inc/functions.php');


if(isset($_POST) && !empty($_POST)) {
	$data = array();
	$data['full_name']= sanitize($_POST['full_name']);
	$data['contact']= sanitize($_POST['phone']);
	$data['category']= sanitize($_POST['category']);
	$data['model_name']= sanitize($_POST['model_name']);
	$data['seat']= (int)sanitize($_POST['seat']);
	$data['price']= (int)sanitize($_POST['price']);
	$data['city']= sanitize($_POST['city']);
	$data['address']= sanitize($_POST['address']);
	
	$data['user_image']= '';
    /*for image processing*/
    if(isset($_FILES['user_image']) &&  $_FILES['user_image']['error'] == 0){
         $ext = pathinfo($_FILES['user_image']['name'], PATHINFO_EXTENSION);

         $allowed_exts = array('jpg','jpeg','png','gif','bmp');
         if(in_array(strtolower($ext),$allowed_exts)){
         	$path = "images/user";
         	if(!is_dir($path)){
         		mkdir($path, '0777',true);
         	}
         	$file_name = "User-".time().rand(0,99).'.'.$ext;
         	$success = move_uploaded_file($_FILES['user_image']['tmp_name'], $path.'/'.$file_name);

         	if($success){
         		$data['user_image'] = $file_name;
         		
         	}
         }
    }

    $user_id = addUser($data);
	if($user_id){

		$_SESSION['success'] = "user added successfullly.";
	}else{

		$_SESSION['error'] = "sorry! there was problem whddile adding user.";
	}
	@header('location: ./');
	exit;
	
}else{
	$_SESSION['error'] ="Unauthorized access";
	@header('location: ./');
	exit;
 }
