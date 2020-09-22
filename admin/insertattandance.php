

	<?php

        $conn=mysqli_connect("localhost","root","","studentdata");
        $attandance=$_POST['attandance'];
        $str="";
      $date=date("Y-m-d");
      $str=$date;
       foreach ($attandance as $key => $value) {
       	# code...
       	  $std_name=$_POST['std_name'][$key];
       	  $date=date("d-m-Y");
        $s_id=$_POST['s_id'][$key];
        
        	$query="INSERT INTO attandancedetails (std_name,sid,status,date_a)VALUES ('$std_name', '$s_id','$value','$str')";
     		$run=mysqli_query($conn,$query);
     	

        
       }
header("Location: ankit.php");


	?>
