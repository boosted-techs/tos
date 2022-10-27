<?php
session_start();
ini_set('display_errors',0);
class Controller
{
    function __construct() 
    {
        $this->processMobileVerification();
    }

    function url(){
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'];
    }

    function processMobileVerification()
    {
        switch ($_POST["action"]) 
        {
                        
            case "save_to_db":

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $address = $_POST['address'];
                $nin = $_POST['nin'];
                $ninphoto = $this->uploadPhoto();

                if (gettype($ninphoto) == 'string') {
                    echo json_encode(array("type" => "error", "message" => $ninphoto));
                    return;
                }
                $ninphoto = $ninphoto[0];
                $permit = $_POST['permit'];
                 $referee = $_POST['referee'];
                $password = $_POST['password'];
                $password = md5($password);

                include "db-connect.php";

                $query1 = "SELECT fname FROM testdemo WHERE email='$email'";
                $result1 = mysqli_query($conn, $query1);
                $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);

                if(!empty($row)){
                    echo json_encode(array("type" => "error", "message" => "Account already exist."));
                    return;
                }

                $query = "INSERT INTO testdemo (fname,lname,email,mobile,address,nin, ninphoto, permit,referee,password) VALUES ('$fname', '$lname', '$email', '$mobile', '$address', '$nin', '$ninphoto', '$permit', '$referee', '$password')";

                $result = mysqli_query($conn, $query);

                if ($result == FALSE) 
                {
                    echo json_encode(array("type" => "error", "message" => "Registration Failed."));
                return;
                }

                $this->alertAdminForNewRequest($fname . " " . $lname);
                echo json_encode(array("type" => "success", "message" => "Successfully Registered. Your account awaits for approval."));
                
                break;
        }
    }

    function approve(){
        include "db-connect.php";
        $to = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);

        $subject = "REQUEST TO VISIT THE MUSEUM HAS BEEN APPROVED";
        $message = "<h5>Dear " . strtoupper($name);
        $message .= "Your request to Visit THE MUSUEM has been approved. You shall be contacted by our team for more information </h5>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: The Museum <narathahabwe78@gmail.com>' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        $query = "UPDATE tblbooking SET status = 'approved' WHERE email = '$to'";
        $result = mysqli_query($conn, $query);

        if ($result !== FALSE){

            try {
                mail($to,$subject,$message,$headers);
                echo json_encode(['status' => 200, 'message' => "Tourist approved and notified successfully"]);
            } catch (Exception $e) {
                echo $e->getMessage();
            };
            return;
        }
        echo json_encode(['status' => 200, 'message' => " not approved. Please try again later"]);

    }

    function reject(){
        include "db-connect.php";
        $to = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING); 

        $subject = "REQUEST TO VISIT HAS BEEN REJECTED";
        $message = "<h5>Dear " . strtoupper($name);
        $message .= "Your request to Visit THE MUSEUM has been rejected</h5>
        <h5> Reply to this email for more information.</h5>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: THE MUSEUM <narathahabwe78@gmail.com.com>' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        $query = "UPDATE tblbooking SET status = 'rejected' WHERE email = '$to'";
        $result = mysqli_query($conn, $query);
        if ($result !== FALSE){

            try {
                mail($to,$subject,$message,$headers);
                echo json_encode(['status' => 200, 'message' => "Tourist request rejected and notified Successfully"]);
            } catch (Exception $e) {
                echo $e->getMessage();
            };
            return;
        }
        echo json_encode(['status' => 500, 'message' => "Tourist not approved. Please try again later"]);
    }

    function alertAdminForNewRequest(string $name){
        $to = 'info@necauganda.com'; 
        $subject = "NEW REQUEST NEEDS APPROVAL";
        $message = "<h5>Dear Sir/Madam";
        $message .= "A new request from ".strtoupper($name) ."
         to join NECA UGANDA has been submited and awaits your approval. </h5>
         <p> Please visit <a href='https://necauganda.com/admin'> ADMIN DASHBOARD </a> to approve or reject the request </p> <br/>
         <span> This is an automated message, do not reply. </span>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: NECA UGANDA <info@necauganda.com>' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to,$subject,$message,$headers);
    }

    function alertAdminForNewCase(string $name){
        $to = 'narathahabwe78@gmail.com'; 
        $subject = "NEW BAD DRIVING ALERT IS REGISTERED ON THE SYSTEM";
        $message = "<h5>Dear Sir/Madam";
        $message .= " A new Traffic alert Case 
         has been submited</h5>
         <p> Please visit <a href='https://localhost/drive/'> ADMIN DASHBOARD </a> to view the details. </p> <br/>
         <span> This is an automated message, do not reply. </span>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: BAD DRIVING ALERT SYSTEM <narathahabwe78@gmail.com>' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to,$subject,$message,$headers);
    }


    function uploadPhoto(){
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/admin/upload/";
        $target_file = $target_dir . basename($_FILES["ninphoto"]["name"]);

        $file_path = $this->url() . "/admin/upload/".basename($_FILES["ninphoto"]["name"]);
      
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
          $check = getimagesize($_FILES["ninphoto"]["tmp_name"]);
          if($check == false) {
            return "The file selected is not an image";
          }

        // Check if file already exists
        if (file_exists($target_file)) {
          return "Image already exist";
        }

        // Check file size
        if ($_FILES["ninphoto"]["size"] > 5000000) {
          return "Image is too large. It should be less than 5 mbs";
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
          return "Sorry, only JPG, JPEG, and PNG files are allowed.";
        }
        
        if (move_uploaded_file($_FILES["ninphoto"]["tmp_name"], $target_file)) {
            return [$file_path];
        }
    }
}
$controller = new Controller();

if (isset($_POST['approve'])) {
    # code...
    $controller->approve();
}

if (isset($_POST['reject'])) {
    # code...
    $controller->reject();
}

                    