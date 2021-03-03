{extends file="layout.tpl"}

{block name="body"}
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
            <div class="col-md-4  col-md-offset-4" style="margin-top:10px;">
            <form id="feedback" method="POST" action="save.php">
                <h1>feedback</h1>
                <div class="form-group">
                    <label>name</label>
                    <input type="text" id="name" name="name" class="form-control validate[required]">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" id="email" name="email" class="form-control validate[required,custom[email]]">
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
                       <input type="submit" class="btn btn-success" value="submit">
                   </div>
            </form>
            </div>
        </div>
        </div>
    {/block}

    {block name=custom_style}
        <link rel="stylesheet" href="asset/vendors/css/validationEngine.jquery.css">
    {/block}
    
    {block name=custom_script}

        <script src="asset/vendors/js/languages/jquery.validationEngine-en.js"></script>
        <script src="asset/vendors/js/jquery.validationEngine.js"></script>
        <script>
            $(function(){
                $("#feedback").validationEngine();
            })
            
        </script>
    {/block}
    