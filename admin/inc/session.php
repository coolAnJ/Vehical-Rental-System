<?php  
if (!isset($_SESSION['session_id'])|| $_SESSION['session_id']== '') {
    unset($_SESSION['user_id']);
    // unset($_SESSION['name']);
    unset($_SESSION['session_id']);
    $_SESSION['error'] = "please login first.";
  
    @header('location: ./');
    exit;
  }