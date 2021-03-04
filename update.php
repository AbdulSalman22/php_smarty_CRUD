<?php
       require_once('config/connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_no = $_POST['phone_no'];
$performance = $_POST['performance'];
$status = $_POST['status'];

$edit_id = $_GET['edit_id'];

//print_r($_POST); exit;

$qry="UPDATE `feedback_details`
 SET `id`='$id',
 `name`='$name',
 `email`='$email',
 `address`='$address',
 `phone_no`='$phone_no',
 `performance`='$performance',
 `status`='$status',
  WHERE id= '$edit_id'";

$row = mysqli_query($con, $qry);

if($row == 1){
    header('Location: index.php?formstatus=updated');

} else{
    echo "Error please try again";
}

?>