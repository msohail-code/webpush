<?php 
ob_start();
session_start();
$session_username = $_SESSION['username'];
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
require_once('db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <?php 
      $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                                    "https" : "http") . "://" . $_SERVER['HTTP_HOST']."/dare/"; 
      $sel_options = mysqli_query($con,"SELECT * FROM options");
      $row = mysqli_fetch_array($sel_options);
      
      ?>
   

    <title><?php echo $row['title']; ?></title>

    
 <meta property="og:type" content="<?php echo $row['description']; ?>" />
    <meta property="og:title" content="<?php echo $row['title']; ?>" />
    <meta name="description" content="<?php echo $row['description']; ?>">
    <meta property="og:image" content="<?php echo $link."images/".$row['images']; ?>" />
    <link rel="icon" href="images/<?php echo $row['favicon']; ?>">
    
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
</head>