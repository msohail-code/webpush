<?php require_once('includes/top.php');

?>
<body>
    <!--Header area starts here-->
<?php require_once('includes/header.php');?>
<!--Header area ends here-->
    <div class="contianer stats">
        <div class="wrapper">
              <?php 
              if(isset($_POST['add-question'])){
                    $title = $_POST['title'];
                     $image = $_FILES['image']['name'];
                     $image_tmp = $_FILES['image']['tmp_name'];
                  $add_question_query = "INSERT INTO questions(question,image) VALUES ('$title','$image')";
                      $add_question_run = mysqli_query($con,$add_question_query);
                  if($add_question_run){
                      move_uploaded_file($image_tmp,"images/$image");
                      move_uploaded_file($image_tmp,"../images/$image");
                      echo "<span style='font-weight:bold; color:green;'>Question has been Added</span>";
                      header("refresh:1; url=questions.php");
                  }else{
                      echo "<span style='font-weight:bold; color:red;'>have an error</span>";
                  }
              }
              ?><br>
            <button id='add-btn' class="button-blue">Add question</button>
          <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
         
            <form action="" method="post" enctype="multipart/form-data">
    <label for="title">Title</label>
    <input type="text" id="title" class='input-text' name="title" placeholder="Your name..">

    
    
    <label for="social-image">Question Image</label><br>
    <input type='file' id='social-image' name="image" class='social-image'/>

 <input type="submit" class='update' name="add-question" value="Add Question">
  
   
  </form>
          </div>


        </div>
              <?php 
          
            
            
            if(isset($_GET['edit'])){
                $edit_id = $_GET['edit'];
                $edit_sel_query = "SELECT * FROM questions where id ='$edit_id'";
                $edit_sel_run = mysqli_query($con,$edit_sel_query);
                if(mysqli_num_rows($edit_sel_run)>0){
                    $row = mysqli_fetch_array($edit_sel_run);
                    $sel_question = $row['question'];
                    $sel_image = $row['image'];
                }
            ?>
               <div class="edit-question" style="max-width:400px; margin:30px auto;">
    <form action="" method="post" enctype="multipart/form-data">
    <label for="title">Title</label>
    <input type="text" id="title" class='input-text' value="<?php echo $sel_question; ?>" name="up_title" placeholder="Your name..">

    
    
    <label for="social-image">Question Image</label><br>
    <input type='file' id='social-image' name="up_image" class='social-image'/>

 <input type="submit" class='update' name="update-question" value="Update Question">
  
   
  </form>
</div>
        <?php 
            }
            
            
              
            if(isset($_POST['update-question'])){
                $up_title = $_POST['up_title'];
                $up_image = $_FILES['up_image']['name'];
                $up_image_tmp = $_FILES['up_image']['tmp_name'];
                if(!empty($up_title)){
                    if(!empty($up_image)){
                     $up_question = "UPDATE questions SET question='$up_title', image='$up_image' WHERE id='$edit_id'";
                    }else{
                    $up_question = "UPDATE questions SET question='$up_title' WHERE id='$edit_id'";
                    }
                    if(mysqli_query($con,$up_question)){
                        move_uploaded_file($up_image_tmp,"images/$up_image");
                        move_uploaded_file($up_image_tmp,"../images/$up_image");
                        
                        header("refresh:1; url=questions.php");
                    }else{
                        echo "This is not working";
                    }
                }
            }
            
            
            if(isset($_GET['del'])){
                $del_id = $_GET['del'];
                $del_query = "DELETE FROM questions WHERE id = '$del_id'";
                $del_run = mysqli_query($con,$del_query);
                if($del_run){
                     echo "<span style='font-weight:bold; color:red;'>Question has been Removed</span>";
                    header("refresh:1; url=questions.php");
                }else{
                     echo "<span style='font-weight:bold; color:green;'>An error</span>";
                }
                
            }
        
            
            $show_question = "SELECT * FROM questions ORDER by id DESC";
            $show_run = mysqli_query($con,$show_question);
            if(mysqli_num_rows($show_run)>0){
                
          
            ?>
<table id="questions">
  <tr>
    <th>Questions</th>
    <th>Question Images</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<?php 
    while($show_row = mysqli_fetch_array($show_run)){
        $show_id = $show_row['id'];
        $show_quiz = $show_row['question'];
        $show_image = $show_row['image'];
    
    ?>
  <tr>
    <td><?php echo $show_quiz?></td>
    <td><img class="question-image" src="images/<?php echo $show_image?>" alt=""></td>
    <td><a href="?edit=<?php echo $show_id?>"><i class="fa fa-pencil"></i></a></td>
    <td><a href="?del=<?php echo $show_id?>"><i class="fa fa-trash"></i></a></td>
  </tr>
  <?php } ?>
  
</table>
           <?php 
            }
            ?>
            
        </div>
    </div>


<?php require_once('includes/footer.php');?>
