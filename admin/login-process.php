<?php  

 ob_start();
 session_start();
 require 'inc/config.php';
 require 'inc/db.php';
 require 'inc/functions.php';

  
  

  if (isset($_POST)&& !empty($_POST)) {
        if($_POST['username'] ==""){
        $_SESSION['error']= "Enter username first.";

         @header('location: ./');
          exit;
           }
    $username = sanitize($_POST['username']);
    $password = sha1($_POST['password']);

    $user_info = getUserBYUsername($username);
    

    if ($user_info) {
        // User exists
        if ($password == $user_info['password']) {
            // other chek
            $_SESSION['success']= "welcome to admin panell";

            $_SESSION['user_id']= $user_info['id'];
            
            $_SESSION['session_id']= "adminONLY";
    
            @header('location: user-list.php');
            exit;

          
         }else{
            $_SESSION['error']= "password does not match";
            @header('location: ./');
            exit;

         }
    
    }else{
        $_SESSION['error']= "user not registered";
            @header('location: ./');
       
            exit;
    }

 
  }else{
    $_SESSION['error'] = "Unauthorized Access.";
    @header('location: ./');
    exit;

  }
