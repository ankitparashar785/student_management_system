<?php

include 'connection.php';
  $id=$_POST['std_id'];
  $query="SELECT * FROM attandancedetails WHERE id='{$id}'"or die("A");
  $run=mysqli_query($conn,$query);
  $var="";
  $s=1;
  if(mysqli_num_rows($run))
  {
  	while($rows=mysqli_fetch_assoc($run))
  	{
  	$output.="  <table class='table'>

    <tbody>
    <tr>
      <th scope='row'>$s</th>
      <td>$rows['std_name'];</td>
      <td> $rows['date_a'];</td>
      <td>$rows['status'];</td>
    </tr>
  </tbody>
 
  </table>";
  $s++;
}
mysql_close($conn);
echo $output;
  }
?>