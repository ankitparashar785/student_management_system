<?php
include "connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php


if (isset($_POST['submit'])) {
  $ide=$_SESSION['id'];
  # code...
  $email_search="SELECT * FROM markdetails WHERE sid='$ide'" or die("L");
  $query=mysqli_query($conn,$email_search);
  $email_count=mysqli_num_rows($query);
  if($email_count)
  {
     $rows=mysqli_fetch_assoc($query);
  }
  else
  {
      header("Location: http://localhost/learnPHP/student/studentdashboard.php");
  }


  
}
   
?>

<div class="container">

<h1 class="text-center">Your Result</h1>       
  <table class="table table-danger table-hover ">
    <thead>
      <tr>
        <th>Math</th>
        <th>Physics </th>
        <th>Chemistry</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $rows['math'];?></td>
        <td><?php echo $rows['phy'];?></td>
        <td><?php echo $rows['che'];?></td>
        <td><?php
            $sum=$rows['math']+$rows['phy']+$rows['che'];
            $pr=($sum/3);
          if($rows['math']<30||$rows['phy']<30||$rows['che']<30)
          {
            echo "Fail";
          }
          else
          {
            if($pr>60)
            {
              echo "First";
            }
            else
            {
              echo "Second";
            }
          }


        ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
