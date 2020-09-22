<?php
include "connection.php";
include "addstudent.php";
$email_error=$pass_error=$error_final="";
if(isset($_POST['submit']))
{
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $pass=$_POST['pass'];
 $cpass=$_POST['cpass'];
 $email=$_POST['email'];
$files=$_FILES['myfile'];
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];

 $destfile='studentimage/'.$filename;


    $query="SELECT email FROM studentdetails WHERE email='$email'" ;
    $run=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($run);
 
    if( $rows>0)
    {
    	header("Location:http://localhost/learnPHP/admin/addstudent.php");
    	
    	
    }
    else
    {
    	if ($pass!=$cpass) {
    		# code...
    		$pass_error="Password doesnot match";
    	
    
    	}
    
    	else
    	{  
    		$sql="INSERT INTO studentdetails( fname, lname, pass, cpass,  email,photo) VALUES ('{$fname}','{$lname}','{$pass}','{$cpass}','{$email}','{$destfile}')" or die("B");
      
           move_uploaded_file($filetmp, $destfile);
    		$run2=mysqli_query($conn,$sql);
    		if($run2)
    		{
    			$sucess="submitted";
    			header("Location:http://localhost/learnPHP/admin/ankit.php");
    		}
    		else
    		{
    			$error_final="Unable to save";
    		}
    	}
    }


}



 ?>


