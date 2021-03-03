<?php
       require_once('config/connect.php');

//       $qry="select* from bank details";   
//        $row =mysqli_query($con,$qry);




//       echo "<pre>";
//       while ($res = mysqli_fetch_assoc($row)){
//        print_r($res);    
//       }


$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_no = $_POST['phone_no'];
$performance = $_POST['performance'];
$status = $_POST['status'];


//print_r($_POST); exit;
//print_r($_POST); exit;

$qry=" INSERT INTO `feedback_details`(`id`, `name`, `email`, `adderss`, `phone_no`, `performance`, `status`, `created_at`, `updated_at`) 
VALUES ('$name','$email','$address','$phone_no','$performance','$status')";

$row = mysqli_query($con, $qry);

if($row ==1){
    header('Location: index.php?formstatus=saved');

} else{
    echo "Error please try again";
}

?>
