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
  <input id="hidin" type="hidden" name=""value=<?php echo $id;?>>
  <div class="text-center mt-5">
    <h1 class="text-center text-danger "> ATTANDENCE DETAILS</h1>
    <label>From </label>
<input type="date" name="" id="s_date" >
<label>  To </label>
<input type="date" name="" id="l_date">
  </div>
  <button class="btn btn-success"  id="attan">SHOW</button>
    <div class="table-responsive-sm mt-5 table-success" id="table">
       

  </div>
</div>
<script type="text/javascript">
	
$(document).ready(function (e) {
	// body...
	  
	$("#attan").on("click",function(e) {
      e.preventDefault();
     
      var id=$("#hidin").val();
     var s=$("#s_date").val();
     var l=$("#l_date").val();
      if (s!=''&&l!='') {

      	   $.ajax({ 
       url:"showattandance.php",
       type:"POST",
       data:{std_id:id,start_date:s,end_date:l},
       success:function(data) {
    
        $("#table").html(data);

       }
      });
      }
      else
      {
      	alert('Select date');
      }
       
	});
});



</script>

</body>
</html>
