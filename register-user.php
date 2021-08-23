<?php 
 $page_title = "Register";

 include'inc/header.php';
 $current_page = pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME);
 ?>
<!-- nav-bar -->
<?php include'inc/navbar.php'; ?>

 <div class="container" style="padding-top: 3px;">
   <h3 style="text-align: center;">Register Your Vehicle Here</h3>
   <hr style="border-top: 1px solid black;padding-bottom: 20px;">
      <!-- <div class="row"> -->
                 <div class="col-sm-10" style="padding-bottom: 40px">
                       <form action="register-process.php" method="post" enctype="multipart/form-data" class="form form-horizontal">                       
                            <div class="form-group">
                               <div class="row">
                                 <label class="col-sm-3 control-label">Full Name:</label>
                                 <div class="col-sm-7">
                                   <input  type="text" name="full_name" required placeholder="Enter your name" class="form-control">
                                 </div>
                                </div>
                            </div> <!-- /form-group full-name-->
                            

                            <div class="form-group">
                             <div class="row">
                               <label class="control-label col-sm-3">Contact no:</label>
                               <div class="col-sm-7">
                                   <input  type="tel" name="phone" required placeholder="9876543210" class="form-control" pattern="[0-9]{10}">
                                </div>
                                 
                             </div>
                            </div><!-- /form-group Contact -->


                            <div class="form-group">
                                <div class="row">
                                  <label class="col-sm-3 control-label">Category:</label>
                                  <div class="col-sm-7">
                                   <select name="category" class="form-control">
                                      <option value="jeep">Jeep</option>
                                      <option value="car"selected>Car</option>
                                      <option value="bus">Bus</option>
                                      <option value="mini-bus">Mini Bus</option>
                                      
                                   </select>
                                 </div>
                                </div>
                            </div><!-- /form-group Category -->

                            <div class="form-group">
                               <div class="row">
                                 <label class="col-sm-3 control-label">Model name:</label>
                                 <div class="col-sm-7">
                                   <input  type="text"  name="model_name" required placeholder="enter model name" class="form-control">
                                 </div>
                                </div>
                            </div><!-- /form-group Model  -->

                            <div class="form-group">
                             <div class="row">
                               <label class="control-label col-sm-3">Seat Capacity:</label>
                               <div class="col-sm-7">
                                   <input  type="number" min="1"  name="seat" required placeholder="Enter seat available" class="form-control">
                                </div>
                             </div>
                            </div><!-- /form-group Seat -->

                            <div class="form-group">
                             <div class="row">
                               <label class="control-label col-sm-3">Price:</label>
                               <div class="col-sm-7">
                                   <input  type="number" min="0" name="price" required placeholder="Enter price per day for rent" class="form-control">
                                </div>
                             </div>
                            </div><!-- /form-group Price -->

                            <div class="form-group">
                                <div class="row">
                                  <label class="col-sm-3 control-label">City:</label>
                                  <div class="col-sm-7">
                                   <select name="city" class="form-control">                         
                                      <option value="city1"selected>city1</option>
                                      <option value="city2">city2</option>
                                      <option value="city3">city3</option>
                                      <option value="city4">city4</option>
                                      <option value="city5">city5</option>
                                      <option value="city6">city6</option>
                                      <option value="city7">city7</option>
                                   </select>
                                 </div>
                                </div>
                            </div><!-- /form-group City -->

                            <div class="form-group">
                             <div class="row">
                               <label class="control-label col-sm-3">Address:</label>
                               <div class="col-sm-7">
                                   <input  type="text"  name="address" required placeholder="Enter local address" class="form-control">
                                </div>
                             </div>
                            </div><!-- /form-group Address -->
                                                                            
                            <div class="form-group">
                             <div class="row">
                               <label class="control-label col-sm-3">Vehicle Image:</label>
                             <div class="col-sm-8">
                               <input type="file" name="user_image" id="user_image" required accept="image/*">
                             </div>
                             </div>
                            </div><!-- /form-group Vehicle Image -->
                           <!-- /div> -->
                            <div class="form-group">
                               <div class="row">
                                 <label class="control-label col-sm-3"></label>
                                 <div class="col-sm-8">
                                     <input type="hidden" name="act" value="register"><!-- extra for edit -->
                                     <button class="btn btn-danger" type="reset">
                                       Cancel
                                     </button>
                                     <button class="btn btn-success" type="submit">
                                       Submit
                                     </button>
                                 </div>
                               </div>
                            </div><!-- /form-group button -->                           
                        </form><!-- /form -->
                       
                  </div><!-- /col-sm-10  -->
  </div><!-- /container --> 
  
<!-- footer -->
<?php include'inc/footer.php'; ?>
