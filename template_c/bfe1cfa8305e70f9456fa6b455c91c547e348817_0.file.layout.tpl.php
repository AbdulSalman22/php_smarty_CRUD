<?php
/* Smarty version 3.1.39, created on 2021-03-05 06:56:58
  from 'C:\xampp\htdocs\feedback\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6041c82a127942_41370745',
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
function content_6041c82a127942_41370745 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12254119426041c82a123ac1_05788513', 'custom_style');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3844406076041c82a127942_65706067', 'body');
?>


    <?php echo '<script'; ?>
 src="asset/jq/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10252524996041c82a127949_23088538', 'custom_script');
?>

</body>
</html>
<?php }
/* {block 'custom_style'} */
class Block_12254119426041c82a123ac1_05788513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_style' => 
  array (
    0 => 'Block_12254119426041c82a123ac1_05788513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'custom_style'} */
/* {block 'body'} */
class Block_3844406076041c82a127942_65706067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3844406076041c82a127942_65706067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'body'} */
/* {block 'custom_script'} */
class Block_10252524996041c82a127949_23088538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom_script' => 
  array (
    0 => 'Block_10252524996041c82a127949_23088538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'custom_script'} */
}
