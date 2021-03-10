<?php
       require_once('class/feedback.php');

       $feedback = new feedback();

       $delete_id = $_GET['delete_id'];

        //  $qry = "DELETE FROM `feedback_details` WHERE id = '$delete_id'";

       
        $row = $feedback->Delete($id,$name,$email,$address,$phone_no,$performance,$status);

       
    //    $row = mysqli_query($con, $qry);
       
if($row == 1){
    header('Location: index.php?formstatus=deleted');

} else{
    echo "Error please try again";
}

?>