<?php
/* Smarty version 3.1.39, created on 2021-03-03 08:44:11
  from 'C:\xampp\htdocs\feedback\template\new_feedback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603f3e4b461395_17823283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2c4ca1c5c0d80fe3f13d3d131203059a090dcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\feedback\\template\\new_feedback.tpl',
      1 => 1614678337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603f3e4b461395_17823283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1539751164603f3e4b407606_63686281', "body");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_468597723603f3e4b45d510_12018580', 'custom_style');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2083238427603f3e4b461392_18933910', 'custom_script');
?>

    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_1539751164603f3e4b407606_63686281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1539751164603f3e4b407606_63686281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
    <?php
}
}
/* {/block "body"} */
/* {block 'custom_style'} */
class Block_468597723603f3e4b45d510_12018580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_style' => 
  array (
    0 => 'Block_468597723603f3e4b45d510_12018580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="asset/vendors/css/validationEngine.jquery.css">
    <?php
}
}
/* {/block 'custom_style'} */
/* {block 'custom_script'} */
class Block_2083238427603f3e4b461392_18933910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_script' => 
  array (
    0 => 'Block_2083238427603f3e4b461392_18933910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php echo '<script'; ?>
 src="asset/vendors/js/languages/jquery.validationEngine-en.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="asset/vendors/js/jquery.validationEngine.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(function(){
                $("#feedback").validationEngine();
            })
            
        <?php echo '</script'; ?>
>
    <?php
}
}
/* {/block 'custom_script'} */
}
