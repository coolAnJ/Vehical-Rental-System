<?php   ob_start();
 session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/mytstyle2.css">
  <title>LOGIN</title>
</head>
<body>
<?php 
   if (isset($_SESSION['session_id']) && $_SESSION['session_id'] !='') {
        /*$_SESSION['success'] = "you are logged in";*/
        @header('location: user-list.php');

 }?>
   <div class="splash-container" style="padding-top: 75px;">
        <div class="card ">
               <div class="card-header text-center">
                 <span class="splash-description" style="color:Tomato;"><?php if(isset($_SESSION['error'])){echo $_SESSION['error'];
                    unset($_SESSION['error']);}?> </span>

                <span class="splash-description">Please login.</span></div>
            <div class="card-body">
                <form action="login-process.php" method="post" class="form form-horizontal">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password" required >
                    </div>
                   
                    <input type="hidden" name="act" value="register">
                    <button type="submit"  class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
            

        </div>
    </div>
</body>
</html>