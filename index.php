<?php 
 $page_title = "Rental System";

 include'inc/header.php';
 $current_page = pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME);
 ?>
<!-- nav-bar -->
<?php include'inc/navbar.php'; ?>	


<h3 class="findbest" >Find, Call and Rent</h3>
<p class="mytext">Search vechicle of your choice, details , call  owner and get it for rent.<br>
  <?php 
  /*session message*/
      if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
      }elseif(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
      } 
  ?>
</p>

<hr class="soften">

<div class="row" style="padding-bottom: 50px;">
    <!-- Category column -->
    <div class="col-lg-2">
        <div class="vehicle_cat_first">
            <div class="vehicle_cat_all">
                <span>Categories</span>
            </div>
            <ul>
                <li><a href="vehicle-list.php?type=car">Car</a></li>
                <li><a href="vehicle-list.php?type=jeep">Jeep</a></li>
                <li><a href="vehicle-list.php?type=bus">Bus</a></li>
                <li><a href="vehicle-list.php?type=mini-bus">Mini-Bus</a></li>
            </ul>
        </div>
    </div><!-- /column1 |category body-->

     <!-- Recentlyadded Column -->
     <div class="col-lg-10">
          <div class="flex-row recadd" style="">
            <h3>Recently added</h3>     
          </div>
          <div class="row" >

              <?php   
              
               //$all_news = false;
               $all_cnt = false;
               $all_cnt = getRecentlyAdded("tblusers");

               if($all_cnt){
                $i = 0; 
                foreach ($all_cnt as $key => $value) {
                  $i = $i + 1;
                   //debugger($all_cnt,true);
                  ?>
                 
                     <div class="column"  >
                        <div class="card" >
                          <img src="images/user/<?php echo $value['user_image'] ?>" alt="Product Imange" style="width: 291px;height: 193px;" >
                          <h3><?php echo ucfirst($value['category']); ?></h3>
                          <p><a href="view-detail.php?id=<?php echo $value['id']; ?>&amp;act=view"><button>View Details</button></a></p>
                        </div><!-- /card -->
                      </div>
                   
                    
                  <?php 
                  if($i > 9){
                    break;
                  }
                } 
               }

                ?>
            
          </div>
     </div>
</div>



 <!-- footer -->                     
<?php include'inc/footer.php'; ?>