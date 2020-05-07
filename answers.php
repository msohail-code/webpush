<?php require_once('includes/top.php');

if(isset($_GET['name']) && isset($_GET['darer']) && isset($_GET['question'])){
    $name = $_GET['name'];
    $darer = $_GET['darer'];
    $questionno = $_GET['question'];
}else{
    header("location:index.php");
}
?>

  <body>
<?php require_once('includes/header.php');?>
<!--dare area start here-->

<!--dare area start here-->
    <article>
        <div class="center">
            <form action="" method="post">
                
                <?php
                    $sel_darer = mysqli_query($con,"SELECT * FROM dares WHERE slug='$darer'");
            
                    $no_of_questions = mysqli_num_rows($sel_darer);
            while($sel_questions_row = mysqli_fetch_array($sel_darer)){
                $questions[] = $sel_questions_row['question_id'];
            }
              
            $ques_here = $questionno;
            $this_question =  $questions[--$ques_here];
            $sel_questions = mysqli_query($con,"SELECT * FROM questions where id='$this_question'");
            
            if(mysqli_num_rows($sel_questions)){
                $row = mysqli_fetch_array($sel_questions);
                $image = $row['image'];
                $question = $row['question'];
            
                ?>
                <div class="answer-box">
                  <img src="images/<?php echo $image?>" alt=""><br>
                  <span class="question-no">Question: <?php echo "$questionno/$no_of_questions"; ?></span><br><br>
                   <h3><?php echo $question?></h3><br>
            <input type="text" name="user-answer" placeholder="Enter your Answer:" class="give-answer" id="give-answer">
                </div><br>
            <?php
            }
            
                
                ?>
                
            <button type="submit" class="next-question" name="next-question"><!--<a href="answers.php?name=<?php echo $name;?>&darer=<?php echo  $darer;?>&question=<?php //echo  ++$questionno;?>" >Next</a>-->Next</button> 
             
            </form>
        </div>
     <?php 
        if(isset($_POST['next-question'])){
            $user_answer = $_POST['user-answer'];
            $add_answer = "INSERT INTO solved(name,slug,answer,question_id) VALUES ('$name','$darer','$user_answer','$this_question')";
            if(mysqli_query($con,$add_answer)){
                $here_next_question = ++$questionno;
                
                
                if($here_next_question > $no_of_questions)
                    header("location:result.php?name=$name&darer=$darer");
            else
                header("location:answers.php?name=$name&darer=$darer&question=$here_next_question");
            }
        }
        ?> 
          
    </article>
    <!--Dare area ends here-->
 <?php require_once('includes/footer.php');?>