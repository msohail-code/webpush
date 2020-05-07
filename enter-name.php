<?php require_once('includes/top.php');

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    header("loaction: index.php");
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
                if(isset($_POST['send'])){
                    $name = $_POST['name'];
                     $darer = $_GET['darer'];
                  if(!empty($name)){
                        if($action == 'create'){
                       header("location: questions.php?name=$name");
                    }else if($action == 'accept'){
                            $count =1;

                      header("location: answers.php?name=$name&darer=$darer&question=$count");
                    }
                  }else{
                      echo "<span style='color:#fff font-weight:bold;'>Please enter your name</span>";
                  }
                    
                }
                ?>
                <h2>Enter your <span class="nick-name">NickName</span></h2>
                <form action="" method="post">
                <input type="text" name="name" id="" placeholder="Enter Your Name" class="enter-nick-name">
                <br><br>
                <input type="submit" value="Start" name="send" class="create-dare-btn">
                </form>
            </div>
        </div>
    </article>
    <!--Dare area ends here-->
    <?php require_once('includes/footer.php')?>