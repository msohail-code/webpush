<?php require_once('includes/top.php');

?>
<body>
    <!--Header area starts here-->
<?php require_once('includes/header.php');?>
<!--Header area ends here-->
    <div class="contianer stats">
        <div class="wrapper">
          <?php
            if(isset($_POST['update'])){
                 $title = $_POST['title'];
                 $description = $_POST['description'];
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $favicon = $_FILES['favicon']['name'];
                $favicon_tmp = $_FILES['favicon']['tmp_name'];
                
                if(!empty($title) or !empty($description)){
                    if(empty($image) and empty($favicon) ){
                    $up_setting = "UPDATE options SET title = '$title', description = '$description'";
                        }else if(empty($favicon) ){
                        $up_setting = "UPDATE options SET title = '$title', description = '$description', images='$image'";
                    }else if(empty($image) ){
                        $up_setting = "UPDATE options SET title = '$title', description = '$description', favicon='$favicon'";
                    }
                    
                    else{
                        $up_setting = "UPDATE options SET title = '$title', description = '$description', images='$image',favicon='$favicon'";
                    }
                    if(mysqli_query($con,$up_setting)){
                        move_uploaded_file($image_tmp,"images/$image");
                        move_uploaded_file($favicon_tmp,"images/$favicon");
                        move_uploaded_file($favicon_tmp,"../images/$favicon");
                        echo "<span style='color:green; font-weight:600;'>Setting Changed</span>";
                        header("refresh:1; url=site-settings.php");
                    
                    }
                }else{
                    echo "<span style='color:red; font-weight:600;'>No Changes</span>";
                }
            }
            
      $select_setting = "SELECT * FROM options";
      $select_run = mysqli_query($con,$select_setting);
      if(mysqli_num_rows($select_run)){
          $row = mysqli_fetch_array($select_run);
          $title = $row['title'];
          $image = $row['images'];
          $description = $row['description'];
          $get_favicon = $row['favicon'];
     
      ?>   
 <div id='site-settings'>
  <form action="" method="post" enctype="multipart/form-data">
  
    <label for="title">Title</label>
    <input type="text" id="title" class='input-text' name="title" value="<?php echo $title; ?>" placeholder="Your name..">

    <label for="description">Description</label>
    <textarea class='desciption' id='description' name="description"><?php echo $description; ?></textarea>
    
    <label for="social-image">Social Media Image</label><br>
    <input type='file' id='social-image' name="image" class='social-image'/><br><br>
<label for="favicon">Favicon</label><br>
    <input type='file' id='social-image' name="favicon" class='social-image'/>
    
  
    <input type="submit" class='update' name="update" value="Update">
  </form>
  
</div>
           <div class="setting-preview">
              <h3>Social Media Image</h3>
               <img id="social-image" src="images/<?php echo $image; ?>" alt="">
               <h3>Favicon</h3>
               <img src="images/<?php echo $get_favicon; ?>" width="100px" height="100px" alt="">
           </div>
            <?php } ?>
        </div>
    </div>


<?php require_once('includes/footer.php');?>
