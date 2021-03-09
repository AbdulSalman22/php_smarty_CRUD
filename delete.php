<?php
       require_once('class/feedback.php');

$delete_id = $_GET['delete_id'];


$row = $feedback->Delete($id,$name,$email,$address,$phone_no,$performance,$status);

if($row == 1){
    header('Location: index.php?formstatus=deleted');

} else{
    echo "Error please try again";
}

?>