<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-14 15:59:43
  from 'C:\Program Files\Ampps\www\EncodersWebTest\templates\editTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6191326f3801d5_72368037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb6702352a92af34b5431e3eb776db1cfac905b0' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\EncodersWebTest\\templates\\editTask.tpl',
      1 => 1636905574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6191326f3801d5_72368037 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a076d05399.js"><?php echo '</script'; ?>
>
</head>
    <body>
    <div class="wrapper">
        <header>Todo App</header>
        <div class="inputField">
          <form action="editar" method="POST">

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['task']->value, 'singletask');
$_smarty_tpl->tpl_vars['singletask']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['singletask']->value) {
$_smarty_tpl->tpl_vars['singletask']->do_else = false;
?>
              <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['singletask']->value->id;?>
" name="id">
              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['singletask']->value->tarea;?>
" name="task">
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <select name="folder">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['folders']->value, 'folder');
$_smarty_tpl->tpl_vars['folder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['folder']->value) {
$_smarty_tpl->tpl_vars['folder']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['folder']->value->id_folder;?>
"><?php echo $_smarty_tpl->tpl_vars['folder']->value->folder;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="submit" class="button" value="Edit">
            <input type="button" class="button" onclick="history.back()" value="Cancel">
        </form>
        
      </div>
      </div>
      </body>
</html>
  <?php }
}
