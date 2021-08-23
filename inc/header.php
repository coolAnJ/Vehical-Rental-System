<?php 
  ob_start();
 session_start();

 require('config.php');
 require('db.php');
 require('functions.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_title ;?></title>
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/mystyle.css"> 
	 <link rel="stylesheet" href="assets/css/mytstyle2.css"> 

	 <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/bootstrap.bundle.js"></script>
	 

  
</head>
<body>
	