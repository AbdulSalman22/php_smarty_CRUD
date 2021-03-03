<?php
/* Smarty version 3.1.39, created on 2021-03-02 10:45:43
  from 'C:\xampp\htdocs\feedback\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603e09477dd352_20238204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe1cfa8305e70f9456fa6b455c91c547e348817' => 
    array (
      0 => 'C:\\xampp\\htdocs\\feedback\\template\\layout.tpl',
      1 => 1614678284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e09477dd352_20238204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_698595617603e09477d5e38_45698644', 'custom_style');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_908777666603e09477d8a68_75395612', 'body');
?>


    <?php echo '<script'; ?>
 src="asset/jq/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1221811905603e09477dbd68_75358599', 'custom_script');
?>

</body>
</html>
<?php }
/* {block 'custom_style'} */
class Block_698595617603e09477d5e38_45698644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_style' => 
  array (
    0 => 'Block_698595617603e09477d5e38_45698644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'custom_style'} */
/* {block 'body'} */
class Block_908777666603e09477d8a68_75395612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_908777666603e09477d8a68_75395612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'body'} */
/* {block 'custom_script'} */
class Block_1221811905603e09477dbd68_75358599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_script' => 
  array (
    0 => 'Block_1221811905603e09477dbd68_75358599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'custom_script'} */
}
