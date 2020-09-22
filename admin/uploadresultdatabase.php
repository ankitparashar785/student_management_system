
<?php 
session_start();
include 'connection.php';
$math=$_POST['math'];
$phy=$_POST['phy'];
$che=$_POST['che'];
$sid=$_SESSION['s_id'];

if(isset($_POST['submit']))
{

echo $sid;
  $sql="INSERT INTO markdetails (math,phy,che,sid)VALUES ({$math},{$phy},{$che},{$sid})" or die("Ankit");
  $run=mysqli_query($conn,$sql);
  if($run)
  {
  header("Location:http://localhost/learnPHP/admin/ankit.php");
}
}
if (isset($_POST['update'])) {
	# code...

	$query="UPDATE markdetails SET math='{$math}',phy='{$phy}',che='{$che}'WHERE sid='{$sid}'";
	  $r=mysqli_query($conn,$query);
	   if($r)
  {
  header("Location:http://localhost/learnPHP/admin/ankit.php");
}
}





 ?>
