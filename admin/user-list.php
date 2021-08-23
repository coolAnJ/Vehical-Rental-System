<?php  
  ob_start();
 session_start();
 require'inc/session.php';
 require'inc/config.php';
 require'inc/db.php';
 require'inc/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin || List-User</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body> 
 
<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link" href="user-list.php">List-user</a>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>           
    </ul>
</nav>
<!-- /navbar -->

     <div class="row" style="padding: 0 25px 50px 25px"><!-- /table row -->
      <?php if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
      }elseif(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      } ?>
        <table class="table table-bordered">
           <thead>
             <th>S.N</th>
             <th>Full_name</th>
             <th>contact</th>
             <th>category</th>
             <th>model_name</th>
             <th>seat</th>
             <th>price</th>
             <th>city</th>
             <th>address</th>
             <th>Image</th>
             <th>Added Date</th>  
             <th>Action</th>  
            </thead>
            <tbody>
               <?php 
               //$all_news = false;
               $all_cnt = false;
                $all_cnt = getAllRow();
               //debugger( $all_cnt, true);
                
               //use session from verify
               //debugger($all_news, true);
               if($all_cnt){
                $i = 0; 
                foreach ($all_cnt as $key => $value) {
                  ?>
                  <tr>
                    
                    <td><?php 
                    $i = $i + 1;
                    //echo $key+1;
                    echo $i;?></td>
                    <td><?php echo $value['full_name']; ?></td>
                    <td><?php echo $value['contact']; ?></td>
                    <td><?php echo $value['category']; ?></td>
                    <td><?php echo $value['model_name']; ?></td>
                    <td><?php echo $value['seat']; ?></td>
                    <td><?php echo $value['price']; ?></td>
                    <td><?php echo $value['city']; ?></td>
                    <td><?php echo $value['address']; ?></td>
                    <td><img src="../images/user/<?php echo $value['user_image']; ?>" alt="User_image" class="img img-thumbnail" style="height: 90px;width:150px;"></td>
                    <td><?php echo date('Y-m-d',strtotime($value['added_date'])); ?></td>
                    
                    <td>
                      <?php  $_SESSION['delete'] = $value['id'];?>
                       <a href="delete-user.php?id=<?php echo $value['id'];?>&amp;act=delete" class ="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category??');" style="border-radius: 50%" >Delete
                        <!-- <i class="fa fa-trash"></i> --> </a>
                    </td>

                  </tr>

                  <?php 
                } 
               }
               //debugger("echo");
               //debugger($_SESSION['delete'],true);

                ?>
          </tbody>
        
        </table>
    </div>
    <div class="fixed-bottom" style="background-color:#5D6D7E ;">
          <p style="text-align:center">Copyright &copy; coolAnj</p>
          
    </div>
  </body>
</html>

  



