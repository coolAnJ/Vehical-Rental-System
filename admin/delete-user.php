<?php
  ob_start();
 session_start();
include'inc/session.php'; 
require'inc/functions.php';
require'inc/config.php';
require'inc/db.php';

if(isset($_GET['id']) && $_GET['id'] != 0 && $_GET['act'] ="delete"){
	$delete_id = $_GET['id'];
}


/*get user data*/
$user_info = getUserById($delete_id);

	if($user_info){
		$del = deleteData('tblusers','id',$delete_id);
		
		if($del){
			if($user_info['user_image'] != "" && file_exists('../images/user/'.$user_info['user_image'])){
				unlink('../images/user/'.$user_info['user_image']);
			
			$_SESSION['success'] = "user deleted successfully";
			}
		}else{
			$_SESSION['error'] = "sorry! there was problem while deletin user.";
		}
		@header('location: user-list.php');
		exit;
    }else{
    	$_SESSION['error'] ="No match found for your search.";
    	@header('location: user-list.php');
    	exit; 
    }




