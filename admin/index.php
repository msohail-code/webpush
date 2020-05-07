<?php require_once('includes/top.php');

$sel_questions = mysqli_query($con,"SELECT * FROM questions");
 $total_questions = mysqli_num_rows($sel_questions);

$sel_dares = mysqli_query($con,"SELECT * FROM dares");
 $total_dares = mysqli_num_rows($sel_dares);







?>
<body>
    <!--Header area starts here-->
<?php require_once('includes/header.php');?>
<!--Header area ends here-->
    <div class="contianer stats">
        <div class="wrapper">
            <div class="brief-stats">
                <div class="main-stat">
                  <div class="content-padding">
                       <div class="stat-icon"><i class="fa fa-users"></i></div>
                   <div class="stat-right">
                       <h4><?php echo $total_dares; ?></h4>
                       <p>Created Dares</p>
                   </div>
                   <div class="clear"></div>
                  </div>
                <a href="dares.php" class="view-all">View all dares</a>
                </div>
            </div>
            
            
                  <div class="brief-stats">
                <div class="main-stat">
                  <div class="content-padding">
                       <div class="stat-icon"><i class="fa fa-question"></i></div>
                   <div class="stat-right">
                       <h4><?php echo $total_questions; ?></h4>
                       <p>Questions</p>
                   </div>
                   <div class="clear"></div>
                  </div>
                <a href="questions.php" class="view-all">View all Questions</a>
                </div>
            </div>
            
                  
            
        </div>
    </div>

<?php require_once('includes/footer.php'); ?>