<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        
    </title>
    <style>
        body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
    </style>
</head>
<body>

</body>
</html>
<?php include "sidebar.php"
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  
					<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <div class="container">
    <div class="row"> -->
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <?php 
$sql ="SELECT id from reported_offence ";
$query = $db -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$offences=$query->rowCount();
?>
    
                    <h6 class="m-b-20">Cases Received</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo htmlentities($offences);?></span></h2>
                    <p class="m-b-0">On the System<span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                     <?php 
$sql ="SELECT company_id from company ";
$query = $db -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$company=$query->rowCount();
?>
                    <h6 class="m-b-20">Companies Registered </h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span><?php echo htmlentities($company);?></span></h2>
                    <p class="m-b-0">On the System<span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Pages to Manage</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>8</span></h2>
                    <p class="m-b-0">On the System<span class="f-right"></span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                                       <?php 
$sql ="SELECT id from reported_offence ";
$query = $db -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$users=$query->rowCount();
?>
                    <h6 class="m-b-20">Users Avaiable</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span><?php echo htmlentities($users);?></span></h2>
                    <p class="m-b-0">On the System<span class="f-right"></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
		
<?php include "footer.php"?>

     