<?php
ob_start();

session_start();

require_once("includes/db.php");


if(isset($_POST['login'])){
	
    $username = $_POST['uname'];
    $password = $_POST['psw'];
   
        $check_username = "select * from users where user= '$username'";
        $check_username_run = mysqli_query($con,$check_username);
		
        if(mysqli_num_rows($check_username_run) > 0){
            $row = mysqli_fetch_array($check_username_run);
            
            $db_username = $row['user'];
            $db_password = $row['password'];
          
            
            
            $new_password = crypt($password,$db_password);
           if($username== $db_username && $new_password==$db_password){
               header('location: index.php');
               $username = '';
               $_SESSION['username'] = $db_username;
              
           } else{
               $error = "wrong password";
           }
        } else{
            $error = "No user found!";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<style>
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
    padding: 40px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
#login-button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
#login-button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
    max-width: 600px;
    margin: auto;
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}    
    
</style>
<body>
   <div class="container">
   <center>
       <h1>Login Here</h1>
   </center>

      
    <form action="" method="post">
 

  
    <label for="uname"><b>Username or Email</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<label>
            <?php 
            if(isset($error)){
                echo "<span style='color:red;' >$error</span>";
            } elseif(isset($msg)){
                echo "<span style='color:green;' >$msg</span>";
            }
            ?>
        </label>
    <input type="submit" name="login" id='login-button' value='Login'/>
   


  
</form>
  </div>
</body>
</html>