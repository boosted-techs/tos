<?php include"sidebar.php"; ?>
   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">REGISTER COMPANY VEHICLE</h4>
                            </div>
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully Reported!")?>
                                            </div>
                                            <?php endif;?>
<div class="content">
							    <form  action="save_company.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" name="company_name" class="form-control" placeholder="Name of Company" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Vehicle Brand.</label>
                                                <input type="text" name="company_vehicle" class="form-control" placeholder="Vehicle Brand Name" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Vehicle Reg. No.</label>
                                                <input type="text" name="vehicle_reg_no"  class="form-control" placeholder="Vehicle Reg. No.">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Driver's Name</label>
                                                <input type="text" name="driver_name" class="form-control" placeholder="Driver's Name">
                                            </div>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Driver's License No.</label>
                                                <input type="text" name="licence"  class="form-control" placeholder="License Number" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Driver's Driving Class.</label>
                                                <input type="text" name="driver_class"  class="form-control" placeholder="Driver's Class" >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                 <select class="form-control" name="gender" >
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select> 
                                            </div>
                                        </div>
	
                                       
	
                                    </div>

                                    </div>
                                   <button type="submit" class="btn btn-info btn-fill pull-right">Register Vehicle</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                     
                    </div>

                </div>
            </div>
        </div>


        <?php include"footer.php"; ?>