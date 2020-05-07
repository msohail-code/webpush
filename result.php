
<?php require_once("includes/top.php");
if(isset($_GET['name']) && isset($_GET['darer']) ){
    $name = $_GET['name'];
    $darer = $_GET['darer'];
}else{
    header("location:index.php");
}
?>
  <body>

      <?php require_once("includes/header.php");?>
      
<!--dare area start here-->
    <article>
        <div class="center">
            <div class="half">
                <h2>Now send screenshot to friend</h2>
                <h4>Dare Completed by <span class="friend"><?php echo $name;?></span></h4>
              <div class="main-result" id="main_result">
                   <?php
                  $q_count =1;
                  $sel_answer = mysqli_query($con, "SELECT * FROM solved where slug='$darer' and name='$name'");
                  if(mysqli_num_rows($sel_answer)>0){
                      while($row = mysqli_fetch_array($sel_answer)){
                          $q_id = $row['question_id'];
                          $answer = $row['answer'];
                    ?>
                    <div class="show-box">
                       <?php
                          $sel_question = mysqli_query($con,"SELECT * from questions where id='$q_id'");
                          $q_row = mysqli_fetch_array($sel_question);
                          $image = $q_row['image'];
                          $question = $q_row['question'];
                          ?>
                        <img src="admin/images/<?php echo $image; ?>" alt="">
                        <div class="question-and-answer">
                           
                            <h5><?php echo $q_count.". ".$question; ?></h5>
                            <p><span class="answer">ans</span> <?php echo $answer;?></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php 
                          $q_count++;
                      }
                  } ?>
                
                    <div class="clear"></div>
                </div>
               
                <div class="main-btn">
                    <a href="index.php" class="create-dare-btn">Create Dare Like this</a>
                </div>
            </div>
        </div>
    </article>
    
    <!--Dare area ends here-->
   <?php
      require_once('includes/footer.php');
      ?>
      <script src="js/html2canvas.js"></script>
      <script>
	function take(){
        alert("This is working");
        html2canvas(document.getElementById('main_result')).then(function(canvas){
		document.getElementById('screen').html(canvas);
	})
	}
</script>