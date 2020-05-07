<?php require_once('includes/top.php');
if(isset($_GET['dare'])){
    $dare = $_GET['dare'];
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
            <div class="half">
                <h2>Dare Created</h2>
              
                <img src="images/home.png" alt="">
                <h4 class="create-dare-txt">Share Dare with your Friends</h4>
                <h4>and they will answer your questions</h4>
                <div class="main-btn"><a href="share-dare.php?share=<?php echo $dare; ?>" class="create-dare-btn">Share Dare</a></div>
            </div>
        </div>
    </article>
    <!--Dare area ends here-->
  
      <?php require_once('includes/footer.php');?>