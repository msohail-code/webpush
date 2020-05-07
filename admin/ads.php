<?php require_once('includes/top.php');?>
<body>
    <!--Header area starts here-->
<?php require_once('includes/header.php');?>
<!--Header area ends here-->
    <div class="contianer stats">
        <div class="wrapper">
            <?php 
            if(isset($_POST['update'])){
               $new_ad_code = $_POST['ad-code'];
                $up_ad = "UPDATE `ads` SET `ads-code` = '$new_ad_code' WHERE `ads`.`id` = 1";
                if(mysqli_query($con,$up_ad)){
                    echo "<span style='color:green'>Ad Code has been Updated</span>";
                    header("refresh:1; url=ads.php");
                }else{
                    echo "<span style='color:red'>Ad Code has not been Updated</span>";
                }
            }
            ?>
 <div id='site-settings'>
  <form action="" method="post">
<?php 
      $sel_ad = "SELECT * FROM ads";
      $sel_ad_run = mysqli_query($con,$sel_ad);
      if(mysqli_num_rows($sel_ad_run)>0){
          $row = mysqli_fetch_array($sel_ad_run);
          $ad_code = $row['ads-code'];
      
      ?>
   
   
    <label for="ad1">Ad here</label>
    <textarea class='desciption' id='ad1' name="ad-code"><?php echo  $ad_code; ?></textarea>
 
    <?php }?>

    
  
    <input type="submit" class='update' name="update" value="Update">
  </form>
</div>
         
            
        </div>
    </div>


<?php require_once('includes/footer.php'); ?>