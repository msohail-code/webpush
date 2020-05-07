    <header>
    <!--logo here-->
    <div class="logo">
        <?php 
		$sel_options = mysqli_query($con,"SELECT * FROM options");
      $row = mysqli_fetch_array($sel_options);
	?>
        <h1><?php echo $row['title']; ?> Admin</h1>
        <div class="menu-icon"><i class="fa fa-bars"></i></div>
    </div><!---end of logo-->
    <!--navbar-->
       <div class="navbar">
           <div class="navbar-left">
               <ul>
                   <li><a href="index.php">Home</a></li>
                  
                 <li><a href="questions.php">Questions</a></li>
                 <li><a href="site-settings.php">Site Setting</a></li>
                 <li><a href="dares.php">Dares</a></li>
                 <li><a href="ads.php">Ads</a></li>
                 <li><a href="profile.php">Authorization</a></li>
          
               </ul>
           </div>
           <div class="navbar-right">
               <button class="button-blue"><i class="fa fa-power-off"></i> <a href="logout.php">Logout</a></button>
               
           </div>
           <div class="clear"></div>
       </div>
        
    </header>