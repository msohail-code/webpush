<?php require_once('db.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script data-ad-client="ca-pub-5400162458086968" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta name="author" content="Dare Site">
    <?php 
      $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                                    "https" : "http") . "://" . $_SERVER['HTTP_HOST']."/"; 
      $sel_options = mysqli_query($con,"SELECT * FROM options");
      $row = mysqli_fetch_array($sel_options);
      
      ?>
   

    <title><?php echo $row['title']; ?></title>

    
 <meta property="og:type" content="<?php echo $row['description']; ?>" />
    <meta property="og:title" content="<?php echo $row['title']; ?>" />
    <meta name="description" content="<?php echo $row['description']; ?>">
    <meta property="og:image" content="<?php echo $link."admin/images/".$row['images']; ?>" />
    <link rel="icon" href="admin/images/<?php echo $row['favicon']; ?>">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">



    <link href="css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>

