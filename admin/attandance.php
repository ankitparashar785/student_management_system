<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="js/jquery.min.js"> </script> 
</head>
<body>
<div class="container">
	
	<div class="text-center mt-5">
		<h1 class="text-center text-danger"> ATTANDENCE PANNEL</h1>


	</div>
	<hr style="background: red">
	<div class="well text-center"><h2> Date: <?php echo date("d-m-Y");?></h2></div>

	<div class="panel panel-default">
		<div class="panel panel-heading">
			<h2 id="alert"  class="text-center text-danger mt-5"></h2>
			<button class="btn btn-success" id="cheak" >Take Attandance</button>
			<button class="btn btn-info" id="cheak1" >Back</button>
			 
<script type="text/javascript">
	

	$(document).ready(function () {
		 $("#attan").hide();
		 $("#cheak1").hide();
		// body...
		  $("#cheak").on("click",function(e) {
		  	// body...
		  
		       	  $.ajax( {
			// body...
			url: "cheakattandance.php",
			type: "POST",
			success:   function (data) {
				// body...
		      if (data==1) {
		      	$("#alert").html(" Today's Attandance Already Taken");
                	$("#cheak1").show();
                	$("#cheak").hide();
		      }
		      else
		      {
		      	
		      	$("#attan").show();

		      }

		   }
			});
		       	  $("#cheak1").on("click",function () {
		       	  	// body...
		            window.location="ankit.php";
		       	  });

	

		
		});

		 
			
	
	});
</script>
		
		</div>
		<div class="panel panel-body col-md-10 mt-5 mx-auto" id="attan">

	
			<form action="insertattandance.php" method="post">

				<table class="table table-striped table-dark">

				
					<tr><th class="text-center" >
						Sr No
					</th>
					<th class="text-center">
					    Student Name
					</th>
					<th class="text-center">
					Take Attandance
					</th></tr>
						<?php
                    $conn=mysqli_connect("localhost","root","","studentdata");
                    $counter=0;
                      
                     

                      $query="SELECT * FROM studentdetails ";
                      $run=mysqli_query($conn,$query);

                      while($rows=mysqli_fetch_assoc($run))
                      {

                      	
				?>
					<tr >
						
                    <td class="text-center">
                    	<?php echo $counter+1 ;?>
                    </td>
                    <td class="text-center">
                    	<?php echo $rows['fname']." ".$rows['lname']; ?>
                    	 
                 <input type="hidden" name="std_name[] " value=" <?php echo $rows['fname'].' '.$rows['lname']; ?>">
                 <input type="hidden" name="s_id[] " value=" <?php echo $rows['id'];?>">
              	 
                    </td>
                         <td class="text-center">
                         	Present
                         	<input type="radio" name="attandance[<?php echo $counter?>]"value ="Present">
                         	Absent
                         	<input type="radio" name="attandance[<?php echo $counter;?>]" value="Absent">
                         </td>
					</tr>
					<?php
					$counter++;
                        }
				?>
				</table>
				<button id="but" type="submit" name="submit" class="btn btn-danger">submit</button>
				
			</form>

		</div>
	</div>
</div>
</body>
</html>