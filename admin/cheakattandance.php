<?php

$conn=mysqli_connect("localhost","root","","studentdata");
        $str="";
      $date=date("Y-m-d");
      $str=$date;
     $name="Ankit";
             $sql="SELECT * FROM attandancedetails WHERE date_a='$date'";
             
             $rub=mysqli_query($conn,$sql);
             if (mysqli_num_rows($rub)) {
              # code...
             	mysqli_close($conn);
               echo 1;
             }
             else
             {
             	mysqli_close($conn);
             	echo 0;
             }



?>