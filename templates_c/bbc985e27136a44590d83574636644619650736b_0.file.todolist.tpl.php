<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-14 06:36:18
  from 'C:\Program Files\Ampps\www\EncodersWebTest\templates\todolist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6190ae62616d57_72245271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc985e27136a44590d83574636644619650736b' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\EncodersWebTest\\templates\\todolist.tpl',
      1 => 1636821887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6190ae62616d57_72245271 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css?2.0">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:app.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
