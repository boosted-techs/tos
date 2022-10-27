<?php
include('connect.php');
//session_start();
// $a = $_POST['offence_id'];
// $b = $_POST['vehicle_no'];
// $c = $_POST['driver_license'];
// $d = $_POST['name'];
$e = $_POST['address'];
$f = $_POST['offence'];
// /$g = $_POST['upload'];
$g = $_FILES['upload']['name'];
move_uploaded_file($_FILES["upload"]["tmp_name"],"images/".$_FILES["upload"]["name"]);
// $h = $_POST['offence'];
// query
$sql = "INSERT INTO reported_offence (address,offence,upload,date ) VALUES (:e,:f,:g,now())";
$q = $db->prepare($sql);
$q->execute(array(':e'=>$e,':f'=>$f,':g'=>$g));{
if($q){
      header("location:report-offence.php?success=true");
        }else{
            header("location:report_offence.php?failed=true");
        } 
		}


?>
                            