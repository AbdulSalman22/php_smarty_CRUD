<?php
require_once('class/Database.php');

class feedback {

    public $db;

    public function __construct()
    {
       $this->db = new Database();
    }

    public function GetFeedbackAll()
    {

            $qry = "SELECT `id`, `name`, `email`, `address`, `phone_no`, `performance`, `status` FROM `feedback_details`";

            $exec = $this->db->Query($qry);

                while($row = mysqli_fetch_object($exec))
                 {
                    $res[] = [
                        'id' => $row->id,
                        'name' => $row->name,
                        'email' => $row->email,
                        'address' => $row->address,
                        'phone_no' => $row->phone_no,
                        'performance' => $row->performance,
                        'status' => $row->status

                    ];
                }

                return $res;
    }

    public function GetFeedbackById($id)
    {

            $qry = "SELECT `id`, `name`, `email`, `address`, `phone_no`, `performance`, `status` FROM `feedback_details`  WHERE id = '$id'";

            $exec = $this->db->Query($qry);
        
            $row = mysqli_fetch_object($exec);

            return $row;
    }

    public function Insert($name, $email, $address, $phone_no, $performance, $status)
    {

        $qry="INSERT INTO `feedback_details`(`name`, `email`, `address`, `phone_no`, `performance`, `status`)
        VALUES ( '$name' , '$email', '$address', '$phone_no', '$performance', '$status')";

        $exec = $this->db->Query($qry);

        return $exec;
    }

    public function Update($name, $email, $address, $phone_no, $performance, $status)
    {

        $qry=" INSERT INTO `feedback_details`(`id`, `name`, `email`, `address`, `phone_no`, `performance`, `status`)      
         VALUES ( '$name' , '$email', '$address', '$phone_no', $performance, '$status')";

        $exec = $this->db->Query($qry);

        return $exec;
    }
    public function Edit($name, $email, $address, $phone_no, $performance, $status)
    {

        $qry=" SELECT `id`, `name`, `email`, `address`, `phone_no`, `performance`, `status` FROM `feedback_details` ";

        $exec = $this->db->Query($qry);

        return $exec;
    }
    public function Delete($name, $email, $address, $phone_no, $performance, $status)
    {

        $qry=" DELETE FROM `feedback_details` WHERE id = '$delete_id'";

        $exec = $this->db->Query($qry);

        return $exec; 
    }
    public function Save($name, $email, $address, $phone_no, $performance, $status)
    {

        $qry=" INSERT INTO `feedback_details`(`id`, `name`, `email`, `address`, `phone_no`, `performance`, `status`)      
        VALUES ( '$name' , '$email', '$address', '$phone_no', $performance, '$status')";

        $exec = $this->db->Query($qry);

        return $exec;
    }
}