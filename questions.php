<?php require_once('includes/top.php');
if(isset($_GET['name'])){
    $user_name = $_GET['name'];
}else{
    header("location: index.php");
}


?>

  <body>
<?php require_once('includes/header.php');?>
<!--dare area start here-->

<!--dare area start here-->
    <article>
        <div class="center">
            <div class="half">
               <?php 
                    
                ?>
                <h2>Select any 7 question</h2>
                <br>
                <?php 
                 $random_chars = str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890");
                 $get_slug = substr($random_chars,0,7);
                    if(isset($_POST['selected'])){
                        foreach($_POST['selected'] as $selected_questions){
                            $insert_dare = "INSERT INTO dares(Name,question_id,slug) VALUES ('$user_name','$selected_questions','$get_slug')";
                            if(mysqli_query($con,$insert_dare)){
                                header("location: dare-created.php?dare=$get_slug");
                            }
                            
                        }
                    }
                ?>
                <form action="" method="post">
                <?php
                $quiz_numbering = 1;
                $quiz_sel = "SELECT * FROM questions";
                $quiz_run = mysqli_query($con,$quiz_sel);
                
                if(mysqli_num_rows($quiz_run)>0){
                    while($row = mysqli_fetch_array($quiz_run)){
                        $quiz_id = $row['id'];
                        $quiz_image = $row['image'];
                        $quiz_name = $row['question'];
                    ?>
                <div class="question-box">
                   <h3><?php echo "$quiz_numbering. $quiz_name";?></h3><br>
                   <img src="admin/images/<?php echo $quiz_image; ?>" alt=""><br>
                    
                   <button type="button" class="select-question"  id="check"><input type="checkbox" value="<?php echo $quiz_id; ?>" name="selected[]" class="game"  id="mycheck"> <span id="remove">Select</span></button>
                </div><br>
            <?php 
                        $quiz_numbering++;
                    }
                }
                ?>
                <div class="main-btn">
                    <button type="submit"    class="create-dare-btn">Questions (<span id="count-question">0</span>)</button>
                </div>
                </form>
                
             
            
        </div>
    </article>
    <!--Dare area ends here-->
 <?php require_once('includes/footer.php');?>