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
 
  img
  {
    width: 400px;
    height: 400px;
 margin: auto;
 margin-top: 40px;

    border-radius: 30px;
  }
  @media screen and (max-width: 400px)
  {
    img
    {
        width: 180px;
    height: 200px;
    margin-top: 0px;
    }
  }
  </style>
</head>
<body>

 <div class="container" style="margin-top:30px">
   
                    

    <?php   
    $sid=$_GET['id'];
    $_SESSION["s_id"]=$sid;

  $query="SELECT * FROM studentdetails WHERE id={$sid}";

  $run=mysqli_query($conn,$query);
  while($rows=mysqli_fetch_assoc($run))
  {
    
?>
         <div class="row">  
         <div class="col-md-4" >  
          <img src="<?php echo $rows['photo'];?>" class="ml-5">
          </div>
            <div class="col-md-4 mx-auto">  
          <form action="uploadresultdatabase.php" method="post" class="was-validated">

  <div clas+="form-group">
    <h1 style="text-align: center;">Marks Details </h1>
    <label for="uname">Mathematics</label>
    <input type="number" class="form-control" id="math" placeholder="Enter Marks" name="math" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Physics</label>
    <input type="number" class="form-control" id="pwd" placeholder="Enter Marks" name="phy" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    <div class="form-group">
    <label for="pwd">Chemistry</label>
    <input type="number" class="form-control" id="pwd" placeholder="Enter Marks" name="che" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required>  Agree 
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div><?php

       $query2="SELECT * FROM markdetails WHERE sid={$sid}";
    $run2=mysqli_query($conn,$query2);
        $result=mysqli_num_rows($run2);
   if($result>0) {
    # code...
    echo  '<button type="submit" name="update" class="btn btn-success">Update</button>';


  }
  else
  {
      echo  '<button type="submit" name="submit" class="btn btn-primary">Upload</button>';

  }
  
  ?>
          </div>
        </form>
      </div>
                    
  
  <?php
}
?>

   
</div>







</body>
</html>
