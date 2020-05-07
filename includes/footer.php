 <footer>
        <center>
          <div >
               <?php
            $get_ad = mysqli_query($con,"SELECT * FROM ads");
            if(mysqli_num_rows($get_ad)){
                $row = mysqli_fetch_array($get_ad);
                echo $row['ads-code'];
            }
            ?>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="social-media-icon">
              <ul>
                  <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="twiiter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="Instagram"><i class="fa fa-instagram"></i></a></li>
              </ul>
          </div>
          <p>Disclaimer: All content is provided for fun and entertainment purposes only</p> <br>
          <div class="copyright">
             <?php 
    
      $sel_options_footer = mysqli_query($con,"SELECT * FROM options");
      $row_footer = mysqli_fetch_array($sel_options_footer);
      
      ?>
              <i class="fa fa-copyright"></i> <?php echo date('Y')." "; ?><?php echo $row_footer['title']; ?>
              
          </div>
        </center>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
    

  </body>
</html>