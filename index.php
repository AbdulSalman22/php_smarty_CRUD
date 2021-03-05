<?php
require_once('smarty_settings.php');
require_once('config/connect.php');

$qry ="SELECT `id`, `name`, `email`, `address`, `phone_no`, `performance`, `status`, `created_at`, `updated_at` FROM `feedback_details`";
    $exec = mysqli_query($con, $qry);

    while($row = mysqli_fetch_object($exec)) {
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
  //  print_r($res);
// echo $_GET['formstatus']; exit;


$smarty->assign('title', 'Smarty');
$smarty->assign('listdata', $res);
$smarty->assign('formstatus', isset($_GET['formstatus']) ? $_GET['formstatus'] : null);
$smarty->display('index.tpl');



// $obj=new stdClass();
// $obj->name="Ravi";
// $obj->fname="Chinn";
// $obj->place="Coiimbatgore";

// echo "<pre>";
// print_r($obj);
// echo "<br>";
// $arr=[
//     'name'=>'Ravi',
//     'fname'=>'Chinn',
//     'place'=>'Coimbatore',
//  ];

//  print_r($arr);

//  echo $obj->name;
//  echo "<br>";
//  echo $arr['name'];


