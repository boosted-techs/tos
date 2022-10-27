
<?php include"connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Bad driver">

    <meta name="keywords" content="landing,startup,flat">

    <meta name="author" content="Made By GN DESIGNS">



    <title>Traffic Crime Alert Sys</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

    <!-- // PLUGINS (css files) // -->

    <link href="assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

       

</head>

                
                </head>
                <body>
                    <div class="container">
   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <br>
                    <br>
                    <br>
                    <div class="col-md-8" style="padding-left: 200px;">
                        <div class="card">
                            <div class="header" >
                                <h4 class="title"style="font-size: 50px;">Register A Company</h4>
                            </div>
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Successfully Registered!")?>
                                            </div>
                                            <?php endif;?>
                            <div class="content">
                                <form action="savereg.php" method="post">
                                    <div class="row">
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username"  class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" name="pass"  class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="userID">Company userID number</label>
                                                <input type="password" name="user_id"  class="form-control" placeholder="your Company ID number" id="userID" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Company Email address</label>
                                                <input type="email" name="email"  class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" name="name"  class="form-control" placeholder="Company Name">
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address of the Company</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Address" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    
                                       
										  <div class="col-md-12">
                                            <div class="form-group">
                                                <label>User Type</label>
                                                 <select class="form-control" name="position" >
  <!-- <option value="admin">Admin</option> -->
  
  <!-- <option value="passenger">I am Passenger</option> -->
  <option value="Company CarOwner">I am Company Car Owner</option>
 <!--  <option value="officer">Police Officer</option> -->

</select> 
                                            </div>
                                        </div>
                                       
                                    </div>
         <button type="submit" class="btn btn-warning btn-fill pull-left">Register</button>
                                    
                <!-- <button class="btn btn-info btn-fill pull-right" style="background-color:blue;"><a href="login.php">Login NOW<a/></button> -->
                    <div class="modal-footer text-center">
                        <p>Have an Account Already?</p></div>
                    <li class="button-holder">

                        <button type="button" class="btn btn-blue navbar-btn pull-right" data-toggle="modal" data-target="#SignIn">Sign in</button>

                    </li>

                                                <br>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                       

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>

                </div>

                <div class="modal-body">

                    <form class="signup-form" action="login2.php" method="post">

                        <div class="form-group">

                            <input type="text" name="username" class="form-control" placeholder="User Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="password" name="pass" class="form-control" placeholder="Password" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-blue btn-block">Log In</button>

                        </div>

                    </form>

                </div>

                <div class="modal-footer text-center">

                    <a href="#">Forgot your password /</a>

                    <a href="#">Signup</a>

                </div>

            </div>

        </div>

    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="assets/js/plugins/bootsnav_files/js/bootsnav.js"></script>

    <script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

    <script src="assets/js/main.js"></script>
