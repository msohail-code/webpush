<?php require_once('includes/top.php');
if(isset($_GET['share'])){
    $share_slug = $_GET['share'];
    
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
            
                
                
                <div class="share-box">
                  
                   <h2>Now, Share your Dare</h2><br>
                   <img src="images/10-min.png" alt="">
                   <h3>Your Share Link</h3>
                  <h3 class="share-link"><?php 
                     

                    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                                    "https" : "http") . "://" . $_SERVER['HTTP_HOST']."/accept-dare.php?dare=$share_slug"; 

                    echo $link; 
                    ?> </h3>
                   
                   <p>Your Friends will send you Screenshot</p>
                   <ul class="share-buttons">
                       <li><a href="whatsapp://send?text= Take this dare and send me the screenshot <?php echo $link;?>" class="whatsapp"><i class="fa fa-whatsapp"></i> Whatsapp</a></li>
                       <li><a target='_blank' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link;?>" class="fb"><i class="fa fa-facebook"> Facebook</i></a></li>
                       
                   </ul>
                   
          
                </div><br>
            <button type="submit" class="next-question">Next</button> 
              
        </div>
      
          
    </article>
    <!--Dare area ends here-->
 <?php require_once('includes/footer.php');?>