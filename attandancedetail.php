<?php

include 'connection.php';
session_start();
$id= $_SESSION['id'];
?>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	 

	  <style type="text/css">
	  	

	  	input
	  	{
	  		margin: 6px;
            background: lightgreen;
            border:none;
            height: 30px;
            text-align: center;
	  	}
	  	label
	  	{
    color: red;
    font-size: 20px;
	  	}
	  </style>
</head>
<body>
  <div class="container">
  <input id="hidin" type="hidden" name=""value="<?echo $id;?>">
  <div class="text-center mt-5">
    <h1 class="text-center text-danger "> ATTANDENCE DETAILS</h1>
    <label>From </label>
<input type="date" name="" >
<label>  To </label>
<input type="date" name="">
  </div>
  <button class="btn btn-success"  id="attan">SHOW</button>
    <div class="table-responsive-sm mt-5 table-success" id="table">
   <table class='table'>

    <tbody>
    <tr>
      <th scope='row'>$s</th>
      <td>$rows['std_name'];</td>
      <td> $rows['date_a'];</td>
      <td>$rows['status'];</td>
    </tr>
  </tbody>
 
  </table>
    

  </div>
</div>
<script type="text/javascript">
	
$(document).ready(function (e) {
	// body...
	  $("#table").hide();
	$("#attan").on("click",function() {
      
      var id=$("#hidin").val();
   
        
      $.ajax({

       url:"showattandance.php",
       type:"POST",
       data:{std_id=id},
       success:function(data) {
    


       }



      });

	});
});



</script>

</body>
</html>