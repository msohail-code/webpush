<?php require_once('includes/top.php');


?>
<body>
    <!--Header area starts here-->
<?php require_once('includes/header.php');?>
<!--Header area ends here-->
    <div class="contianer stats">
        <div class="wrapper">
           <center>
               <h2>Dares</h2>
           </center><br>
<table id="questions">
  <tr>
    <th>Name</th>
    <th>Questions</th>
    <th>slug</th>
    <th>Dare Completed</th>
  </tr>
  <?php 
    $sel_dares = "SELECT d.id, d.Name, d.slug, q.question,d.answered FROM dares AS d INNER JOIN questions AS q ON(d.question_id = q.id)";
    $sel_dares_run = mysqli_query($con,$sel_dares);
    if(mysqli_num_rows($sel_dares_run)>0){
        while($row = mysqli_fetch_array($sel_dares_run)){
            
            $id = $row['id'];
            $darer_name = $row['Name'];
            $slug = $row['slug'];
            $question = $row['question'];
            $answered = $row['answered'];
       
    ?>
  <tr>
    <td><?php echo $darer_name; ?></td>
    <td><?php echo $question; ?></td>
   
    <td><?php echo $slug; ?></td>
    <td><?php echo $answered; ?></td>
  </tr>
  <?php }
    } ?>
</table>
            
        </div>
    </div>


<?php require_once('includes/footer.php');?>
