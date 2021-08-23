<?php 
 $page_title = "Main List";
 include'inc/header.php';

 include'inc/navbar.php'; 

 if(isset($_GET['id'],$_GET['act']) && $_GET['id'] != 0 ){
 $id = $_GET['id'];
 $all_cnt = false;
 $all_cnt = getVechileById("tblusers",$id);
 if($all_cnt){$value = $all_cnt[0];}
 }
?>

<h2 style="text-align:center">Vehicle Details</h2>
<hr class="soften">

<div class="row" style="padding-left:30px;">
  &emsp;
 
  <p style="text-indent: 5em;">Type:&nbsp;<?php echo ucfirst($value['category']); ?></p>
  <p style="text-indent: 5em;">Location:&nbsp;<?php echo ucfirst($value['city']).",".$value['address']; ?></p> 
  <p style="text-indent: 5em;">Seat:&nbsp;<?php echo $value['seat']; ?></p>
  <p style="text-indent: 5em;">Price:&nbsp;<?php echo $value['price']; ?>&nbsp; per day</p>
  <p style="text-indent: 5em;">Contact:&nbsp;<?php echo $value['contact']?></p>

</div>

<hr class="soften">
 <div class="container" style="padding:0 0 50px 200px;">
 	<img src="images/user/<?php echo $value['user_image'] ?>" alt="Product Image" style="height:380px;width: 750px; " >
 </div>


<?php include'inc/footer.php'; ?>