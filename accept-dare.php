<?php require_once('includes/top.php');
if(isset($_GET['dare'])){
    $darer_name = $_GET['dare'];
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
                <h2>What You know</h2>
                <?php
                    $sel_name = "SELECT Name FROM dares where slug='$darer_name'";
                    $sel_name_run = mysqli_query($con,$sel_name);
                    if(mysqli_num_rows($sel_name_run)>0){
                        $row = mysqli_fetch_array($sel_name_run);
                        $name = $row['Name'];
                        
                        echo "<h3>about $name?</h3>";
                    }
                ?>
                
                
                
                <img src="images/home.png" alt="">
                <h4 class="create-dare-txt">accept dare</h4>
                <h4>and send screenshot to friend</h4>
                <div class="main-btn"><a href="enter-name.php?action=accept&darer=<?php echo $darer_name;?>" class="create-dare-btn">accept Dare</a></div>
            </div>
        </div>
    </article>
    <!--Dare area ends here-->
  
      <?php require_once('includes/footer.php');?>