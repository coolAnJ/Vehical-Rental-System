<?php 
$page_title = "Main List";
include'inc/header.php';
$current_page = pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME);
?>

<?php include'inc/navbar.php'; ?>

<?php 
$search_type = "";
$search_city = "";
if(isset($_GET['type']) && $_GET['type'] !=""){
	$search_type = $_GET['type'];
	
}
if(isset($_GET['city']) && $_GET['city'] !=""){
	$search_city = $_GET['city'];
	
	
}

 ?>

<h2 style="text-align:center">Vehicle List</h2>
<h5 style="text-align:center; color: green;"><?php echo ($search_type == "")? $search_city:$search_type."  ".$search_city; ?></h5>

<hr class="soften">

  <div class="row" style="padding-bottom: 200px;">
                <div class="col-lg-2">
                    <div class="vehicle_cat_first">
                        <div class="vehicle_cat_all">
                            <span>Filter by City</span>
                        </div>
                        <ul>
                            <li><a href="vehicle-list.php?<?php echo $search_type != ""? "type=$search_type&&":'' ?>city=city1">city1</a></li>
                            <li><a href="vehicle-list.php?<?php echo $search_type != ""? "type=$search_type&&":'' ?>city=city2">city2</a></li>
                            <li><a href="vehicle-list.php?<?php echo $search_type != ""? "type=$search_type&&":'' ?>city=city3">city3</a></li>
                            <li><a href="vehicle-list.php?<?php echo $search_type != ""? "type=$search_type&&":'' ?>city=city4">city4</a></li>
                            <li><a href="vehicle-list.php?<?php echo $search_type != ""? "type=$search_type&&":'' ?>city=city5">city5</a></li>
                            <li><a href="vehicle-list.php?<?php echo $search_type != ""? "type=$search_type&&":'' ?>city=city6">city6</a></li>
                            <li><a href="vehicle-list.php?<?php echo $search_type != ""? "type=$search_type&&":'' ?>city=city7">city7</a></li>
                        </ul>
                    </div><!-- /category -->
                </div><!-- /column1 -->
                <div class="col-lg-10">
                	<div class="row" >
		                		 <?php   
		              
		               //$all_news = false;
				               $all_cnt = false;
				               $all_cnt = getAllVehicles("tblusers" , $search_type, $search_city);

				               if($all_cnt){
				                $i = 0; 
				                foreach ($all_cnt as $key => $value) {
				                  $i = $i + 1;
				                   
				                  ?>
			                <div class="column">
			        	      <div class="card" >
								  <img src="images/user/<?php echo $value['user_image'] ?>" alt="Product Imange" style="width: 291px;height: 193px;">
								  <h3><?php echo ucfirst($value['category']); ?></h3>
								   <p>Location:&nbsp;<?php echo $value['address']; ?></p>
			  				 		<p><a href="view-detail.php?id=<?php echo $value['id']; ?>&amp;act=view"><button>View Details</button></a></p>
					          </div><!-- /card -->
					        </div><!-- /column -->
		                   
		                    
		              <?php 
		                  
		                } 
		               }else{
		               	echo "No match found for your search.";
		               }

		              ?>
						

                    </div><!-- /row inner -->
                </div><!-- /column2 -->
  </div><!-- /row main -->

<?php include'inc/footer.php'; ?>