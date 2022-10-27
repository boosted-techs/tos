 <?php include "sidebar.php";?>
        <div class="content">
            <div class="container-fluid">
			
 <div class="row">
					<div class="col-md-8 col-md-offset-2">
					 			<?php
                            
				$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM reported_offence where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>
                        <div class="card">
			<div class="header text-center">
                                <h3 class="title">OFFENCE DETIALS COMMITTED</h4>
                                <br>
                               <h3 class="title">GPS DETAILS</h3>
								<div class="mapouter">
									<div class="gmap_canvas"><iframe width="650px" height="294px" 
							id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $row['address']; ?>
							&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" 
							marginwidth="0"></iframe><a href="https://www.webdesign-muenchen-pb.de"></a></div>
							<style>.mapouter{text-align:right;height:294px;width:650px;}.gmap_canvas 
							{overflow:hidden;background:none!important;height:294px;width:650px;}</style><small></small></div>
                            </div>
							
                          
                            <div class="content table-responsive table-full-width table-upgrade">
							 <table class="table">
                                   
                                    <tbody>
									<tr>
                                        	<td style="background-color:#3dd;">Offense Details Committed:</td>
                                        	<td><?php echo $row['offence']; ?></td>
                                        </tr>
									
										<tr>
                                        	<td style="background-color:#3dd;">Location Where Crime Happened </td>
                                        	<td><?php echo $row['address']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#3dd;">Company that Owns the Vehicle| Vehicle:</td>
                                        	<td><?php echo $row['company_vehicle']; ?></td>
                                        </tr>
										
										<tr>
                                        	<td style="background-color:#3dd;">Date of Offense:</td>
                                        	<td><?php echo date('l jS \of F Y h:i:s A');?></td>
                                        </tr>
                                        <tr>
                                        	<td style="background-color:#3dd;">Ivent Photo As taken by Reporter:</td>
                                        	<td><img src="images/<?php echo $row['photo']?>"width="500"> </td>
                                        </tr>
										
										</tbody>
										</table>
										 </div>
						  
                </div> <?php }?>
            </div>
        </div>
		</div>
		</div>
		<?php include "footer.php"; ?>