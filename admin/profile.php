<?php require_once('includes/top.php');


?>
<body>
    <!--Header area starts here-->
<?php require_once('includes/header.php');?>
<!--Header area ends here-->
    <div class="contianer stats">
        <div class="wrapper">
            
 <div id='site-settings'>
 <?php 
     $session_username = $_SESSION['username'];
	 
		 
	 
    $get_user = mysqli_query($con,"SELECT * FROM users where user='$session_username'");
     if(mysqli_num_rows($get_user)>0){
         $get_user_row = mysqli_fetch_array($get_user);
         $get_username = $get_user_row['user'];
         $get_password = $get_user_row['password'];echo "<br>"; 
       
        
         
     
     ?>
  <form action="" method="post" >
  
    <label for="title">Username</label>
    <input type="text" id="title" class='input-text' name="user" value="<?php echo $get_username;?>" placeholder="Your name..">
    
    <label for="title">Password</label>
    <input type="text" id="title" class='input-text' name="password" value="" placeholder="Your name..">
    
    
   
    
  
    <input type="submit" class='update' name="update" value="Update">
  </form>
  <?php }
     if(isset($_POST['update'])){
         $new_user = $_POST['user'];
         $new_password = $_POST['password']; 
         $get_user_salt = mysqli_query($con,"SELECT * FROM users where user = '$session_username'");
          $get_user_sald = mysqli_fetch_array($get_user_salt);
        
         
          $get_salt = $get_user_sald['salt'];
         
           $up_password = crypt($new_password,$get_salt);
         
         if(!empty($new_password) and !empty($new_user)){
         $up_pass = mysqli_query($con, "UPDATE users SET user='$new_user', password = '$up_password' WHERE user = '$session_username'");
        
         if($up_pass)
             echo "<span style='color:green'>Saved</span>";
         else
             echo "Not working";
         
     }else
             echo "<span style='color:red'>Both should be entered</span>";
     }
     ?>
</div>
            
                  
            
       
    </div>

<?php require_once('includes/footer.php'); ?>