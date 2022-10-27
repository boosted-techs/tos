<?php
include('connect.php');
include('controller.php');


session_start();
// $a = $_POST['offence_id'];
// $b = $_POST['vehicle_no'];
// $c = $_POST['driver_license'];
// $d = $_POST['name'];
$e = $_POST['address'];

$f = $_POST['offence'];
$g = $_POST['company_vehicle'];
$h = $_FILES["photo"]["name"];
move_uploaded_file($_FILES["photo"]["tmp_name"],"images/".$_FILES["photo"]["name"]);
 
// query
$sql = "INSERT INTO reported_offence (address,offence,company_vehicle,photo,date ) VALUES (:e,:f,:g,:h,now())";
$q = $db->prepare($sql);
$q->execute(array(':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h));{
if($q){
       $controller = new Controller();
    $controller->alertAdminForNewCase($f);

      header("location:report-offence.php?success=true");
    

    
        }else{

            header("location:report_offence.php?failed=true");
        } 
		}


?>
                            