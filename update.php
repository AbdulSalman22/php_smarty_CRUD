<?php
       require_once('class/feedback.php');

       $feedback = new feedback();

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_no = $_POST['phone_no'];
$performance = $_POST['performance'];
$status = $_POST['status'];

$edit_id = $_GET['edit_id'];

//print_r($_POST); exit;


$row = $feedback->Update($name,$email,$address,$phone_no,$performance,$status);;

if($row == 1){
    header('Location: index.php?formstatus=updated');

} else{
    echo "Error please try again";
}

?>