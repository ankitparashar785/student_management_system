<?php
include "connection.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 470px;
    background: #aaa;
  }
  p
  {
    padding: 20px;
    font-size: 20px;

  }
  .first
  {
    padding-top: 0px;
  }
  div.image
  {
    width: 100%;
    background: rd;
    height: 200px;
  }
  div.imagecontainer
  {
    width: 50%;
    height: 100%;
    margin:auto;
     background:;
  }
  img
  {
    width: 100%;
    height: 100%;
    border-radius: 30px;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>STUDENT DETAILS</h1>
   
</div>



 <div class="container" style="margin-top:30px">

      <div class="row">
 
    <?php   
    $i=1;
  $query="SELECT * FROM studentdetails ";
  $run=mysqli_query($conn,$query);
  while($rows=mysqli_fetch_assoc($run))
  {
    
?>
    
      <div class="col-sm-6"style="margin-top: 20px ">
     
      <div class="fakeimg" style="border-radius: 20px">
        <h3 style="text-align: center; padding-top: 3px;"><?php  echo $i." . Student"?></h3>
        <p >Student  name = <?php  echo $rows['fname']."  ".$rows['lname']     ?></p>
        
    
        <p class="first">Student Email = <?php  echo $rows['email']    ?></p>

    <div class="image">
   <div class="imagecontainer">
     <img src="<?php  echo $rows['photo'];?>">
   </div>
    </div>
    <?php

   $query2="SELECT * FROM markdetails WHERE sid='{$rows['id']}'";
       $run2=mysqli_query($conn,$query2);
       $data=mysqli_num_rows($run2);

   if($data>0)
   {

   
    ?>
    <a href='uploadresult.php?id= <?php  echo $rows['id']  ; ?>'><button type='submit' class='btn btn-success col-sm-12 align-item-center' style='margin-top:10px;'>Update Result</button></a>

<?php
}else
{

?>
 <a href='uploadresult.php?id= <?php  echo $rows['id']  ; ?>'><button type='submit' class='btn btn-info col-sm-12 align-item-center' style='margin-top:10px;'>Upload Result</button></a>
 <?php
}?>
      </div>

      </div> 
      
      

    <?php
$i++;
}
    ?>
     </div></div>
           
  




</div>



</body>
</html>