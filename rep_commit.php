<!DOCTYPE html>
<?php include"sidebar.php";
error_reporting(-1) ?>
<html lang = "eng">
	<head>
		<title> alert report</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
	</head>
<body>

	

		<div id = "sidecontent" class = "well pull-center">
			<div class = "alert alert-info">List of drivers who committ offenses </div>
			<div>
	   <form method="POST">
		<!-- <label>From: </label><input type="date" name="from">
		<label>To: </label><input type="date" name="to"> -->
		<input type="submit" value="Get Report" name="submit">
		<button type = "button" id = "" class = "btn btn-success" onClick="window.print()" ><span class = "fa fa-print"></span> print</button>

	  </form>
    			<br />
			<div id = "station_table" class = "panel panel-default">
				<div  class = " panel-heading">	
					<table id = "table" class = "table table-bordered">
						<thead>
							<tr>
							<th>Offence ID</th>
                                    	<th>Offence</th>
                                    	<th>Offender</th>
                                    	<th>Company</th>
                                    	<th>Address</th>
						<!-- <th>Action</th> -->
		
							</tr>
						</thead>
						<tbody>
							<?php
			                    if (isset($_POST['submit'])){
				                 $result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                               <tr>
						<td><?php echo $row['offence_id']; ?></td>
                                        	<td><?php echo $row['offence']; ?></a></td>
                                        	<td><?php echo $row['company_vehicle']; ?></td>
                                        	<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<!-- <td><td><a rel="facebox" title="Click to edit view details" href="offence-detail.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td> -->
                                        	
                                        </tr>
					                  <?php 
				                                }
			                                  }
		                               ?>
						   </tbody>
					</table>
				</div>	
			</div>
			<div class = "modal fade" id = "delete_location" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this location?</label></center>
							<br />
							<center><a class = "btn btn-danger delete_locations" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div id = "sta_form" style = "display:none;" class = "panel panel-default">
				<div  class = " panel-heading" >	
					<div class = "alert alert-success">locations/Add new</div>
					<div style = "width:40%; margin-left:32%;">	
						<form method = "POST" action = "add_stations.php">	
							<div class = "form-group">
								<label>city</label>
								<input type = "text" class = "form-control" name = "location" onKeyup ="character1Only(this)" required = "required"/>
							</div>
							
							<div class = "form-group">
								<label>Area/branch</label>
								<input type = "text" min="#" class = "form-control" name = "branch" onKeyup ="character12Only(this)" required = "required"/>
							</div>
							<br />
							<div class = "form-group">
								<button class = "btn btn-primary form-control" name = "save_location"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>	
					</div>	
				</div>
			</div>
		<br /><br /><br />
		</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	
	
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.id').on('click', function(){
			$id = $(this).attr('name');
			$('.delete_locations').on('click', function(){
				window.location = 'delete_location.php?id=' + $id;
			});
		})
	});
       // valid!
  function character1Only(input){
	var regex = /[^a-z']/gi;
	input.value = input.value.replace(regex,"");
}
       // valid!
 function character12Only(input){
	var regex = /[^a-z0-9']/gi;
	input.value = input.value.replace(regex,"");
}
</script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/script.js"></script>
</html>