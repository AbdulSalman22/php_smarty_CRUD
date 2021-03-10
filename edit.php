<?php
    require_once('class/feedback.php');

     $feedback = new feedback();

    // $row = $feedback->Insert($name, $email, $address, $phone_no, $performance, $status);

    
    
    $edit_id = $_GET['edit_id'];

    //  $row = $feedback->Edit($id,$name, $email, $address, $phone_no, $performance, $status);

    $qry = "SELECT `id`, `name`, `email`, `address`, `phone_no`, `performance`, `status`, `created_at`, `updated_at` FROM `feedback_details` WHERE id = '$edit_id'";

    // $exec = mysqli_query($con,$qry);

    // $res = mysqli_fetch_object($exec);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/vendors/css/validationEngine.jquery.css">
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 10px;">
            <form id="feedback" method="post" action="update.php?edit_id=<?php echo  $edit_id; ?>">
                <h1>Feedback update</h1>
                <div class="form-group">
                    <label>name</label>
                    <input type="text" id="name" name="name"  class="form-control validate[required]">
                </div>
                <div class="form-group">
                <label>email</label>
                    <input type="email" id="email" name="email" class="form-control validate[required,minSize[10],ajax[ajaxaccountcheck]]">
                </div>
                <div class="form-group">
                    <label>address</label> 
                    <input type="text" id="address" name="address" class="form-control validate[required]">
                </div>
                <div class="form-group">
                    <label>phone no</label>
                    <input type="text" id="phone no" name="phone no" class="form-control validate[required,Sizemin[10]">
                </div>
                <div class="form-group">
                    <label>performance</label>
                    <select id="performance" name="performance" class="form-contol custom-select validate[required]">
                        <option selected="select performance">select performance </option>
                        <option value="excellent">excellent</option>
                        <option value="very good">very good</option>
                        <option value="good">good</option>
                        <option value="bad">bad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>status</label>
                    <select id="status" name="status" class="form-control custom-select">
                        <option selected="select status">select status</option>
                        <option value="active">active</option>
                        <option value="inactive">inactive</option>
                    </select>
                </div>
                
                <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
                
            </form>
        </div>

        </div>
    </div>
    <script src="asset/js/jquery3.5.1.js"></script>
    <script src="asset/vendors/js/languages/jquery.validationEngine-en.js"></script>
    <script src="asset/vendors/js/jquery.validationEngine.js"></script>
    <script>
        $(function() {
            $("#feedback").validationEngine();
            // $('#status').val("<?php echo $res->status; ?>");
            // $('#branch').val("<?php echo $res->performance; ?>");
        })
        </script>
</body>
</html>