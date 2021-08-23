<?php 

 /*function is case sensitive*/

 function sanitize($string){
 	global $conn;
 	return mysqli_real_escape_string($conn,$string);
 }

/*for admin login*/
 function getUserByUsername($username){
 	global $conn;
 	$sql = "SELECT * FROM admin WHERE name = '".$username."'";
 	
 	$query = mysqli_query($conn,$sql);
 	
 	if(mysqli_num_rows($query)<= 0 || mysqli_num_rows($query) >1){
 		
 		return false;
 	}else{
 		$data = mysqli_fetch_assoc($query);
 		return  $data;
 	}

  }



  
/*for all row fetch in user-list*/
function getAllRow(){

     global $conn;
     $sql = "SELECT * FROM tblusers ORDER BY id DESC";//debugger($sql , true);
     $query = mysqli_query($conn,$sql); 
     if(mysqli_num_rows($query) <= 0){
      return false;
     }else{
      $data = array();
      while ($row = mysqli_fetch_assoc($query)){
             $data[] = $row;
      }
      return $data;
     }

 }

 /*for delete process*/
   function  getUserById($user_id){
    
    global $conn;
    $sql = "SELECT * FROM tblusers WHERE id = '".$user_id."'";
    
    $query = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($query) <= 0){
      return false;
    }else {
      $data = mysqli_fetch_assoc($query);
      return $data;
    }
  }


/*for delete*/

 function deleteData($table,$column,$value){
    global $conn ;
    $sql = "DELETE FROM ".$table." WHERE ".$column." = '".$value."'";
    $sql_1 = "DELETE FROM categories WHERE id =".$value;
    
    $query = mysqli_query($conn, $sql);
    
    if($query){
      return true;
    }else {
      return false;
    }
  }




          
