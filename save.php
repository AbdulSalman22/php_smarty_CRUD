<?php
       require_once('config/connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_no = $_POST['phone_no'];
$performance = $_POST['performance'];
$status = $_POST['status'];

//print_r($_POST); exit;

$qry="INSERT INTO `feedback_details`(`name`, `email`, `address`, `phone_no`, `performance`, `status`)
VALUES ('$name','$email','$address','$phone_no','$performance','$status')";

$row = mysqli_query($con, $qry);

if($row ==1){
    header('Location: index.php?formstatus=saved');

} else{
    echo "Error please try again";
}

