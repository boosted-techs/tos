<?php
include('connect.php');
//session_start();
$a = $_POST['company_name'];
$b = $_POST['company_vehicle'];
$c = $_POST['driver_name'];
$d = $_POST['licence'];
$e = $_POST['gender'];
$f = $_POST['driver_class'];
 $g = $_POST['vehicle_reg_no'];
// $g = $_FILES['upload']['name'];
// move_uploaded_file($_FILES["upload"]["tmp_name"],"images/".$_FILES["upload"]["name"]);
// $h = $_POST['offence'];
// query
$sql = "INSERT INTO company (company_name,company_vehicle,driver_name,licence,gender,driver_class,vehicle_reg_no) VALUES (:a,:b,:c,:d,:e,:f,:g)";

$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g));{
if($q){
      header("location:report-offence.php?success=true");
        }else{
            header("location:report_offence.php?failed=true");
        } 
		}


?>
                            