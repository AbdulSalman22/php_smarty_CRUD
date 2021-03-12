<?php
/* Smarty version 3.1.39, created on 2021-03-12 06:59:26
  from 'C:\xampp\htdocs\feedback\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604b033e202903_14417588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '894652a8f309ca3b2b14c8a7f03821666392ddce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\feedback\\template\\index.tpl',
      1 => 1615528763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604b033e202903_14417588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_510298850604b033e1ef083_19802116', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1031044489604b033e202909_62242250', 'custom_style');
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_353263517604b033e202905_20325523', 'custom_script');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_510298850604b033e1ef083_19802116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_510298850604b033e1ef083_19802116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <a class="btn btn-success float-right" href="new_feedback.php">New feedback</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2">       
            <table id="feedback" class="table table-bordered">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>address</th>
                        <th>phone_no</th>
                        <th>performance</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdata']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone_no'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['performance'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                            <td>
                                <a href="edit.php?edit_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-info btn-sm">Edit</a>
                                <a href="delete.php?delete_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "body"} */
/* {block 'custom_style'} */
class Block_1031044489604b033e202909_62242250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_style' => 
  array (
    0 => 'Block_1031044489604b033e202909_62242250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="asset/js/jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="asset/vendors/datatable/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
   
    
<?php
}
}
/* {/block 'custom_style'} */
/* {block 'custom_script'} */
class Block_353263517604b033e202905_20325523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_script' => 
  array (
    0 => 'Block_353263517604b033e202905_20325523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
            $(function(){

                $('#feedback').DataTable();
            })
        <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'custom_script'} */
}
