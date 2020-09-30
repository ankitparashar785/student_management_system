<?php

include 'connection.php';
  $id=$_POST['std_id'];
    $sdate=$_POST['start_date'];
  $edate=$_POST['end_date'];

  $output="";
  $sql="SELECT * FROM attandancedetails WHERE sid='{$id}' AND (date_a BETWEEN '{$sdate}' AND '{$edate}' ) "or die("a");
  $run= mysqli_query($conn,$sql);
 $c=1;

  $output.="<table class='table table-dark'>
    <tbody>";
    while ( $rows=mysqli_fetch_assoc($run)) {
    	# code...
    	$output.="<tr><td>{$c}

    	</td><td class='text-center'>{$rows['date_a']}</td><td class='text-center'>{$rows['status']}</td>


    	</tr>";
    	$c++;
    }
    $output.="</tbody></table>";
    echo $output;
     
  
  

?>
