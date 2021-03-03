<?php
/* Smarty version 3.1.39, created on 2021-03-02 10:45:43
  from 'C:\xampp\htdocs\feedback\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603e09471a1845_24013978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '894652a8f309ca3b2b14c8a7f03821666392ddce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\feedback\\template\\index.tpl',
      1 => 1614678143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e09471a1845_24013978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000767641603e09470bf7c5_68110163', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_2000767641603e09470bf7c5_68110163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2000767641603e09470bf7c5_68110163',
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>address</th>
                        <th>phone_no</th>
                        <th>Performance</th>
                        <th>Status</th>
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
                                <a href="edit_feedback.php?edit_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn btn-info btn-sm">Edit</a>
                                <a href="delete.php?delete_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
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
}
