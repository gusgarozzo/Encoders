<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-14 15:52:28
  from 'C:\Program Files\Ampps\www\EncodersWebTest\templates\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619130bcef8bd0_93031756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa9bdbd843a0cb0ea9f127c8ba7099160a40770' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\EncodersWebTest\\templates\\app.tpl',
      1 => 1636905146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619130bcef8bd0_93031756 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="wrapper">
        <header>Todo App</header>
        <div class="inputField">
          <form action="insertTask" method="POST">
            <input type="text" placeholder="Add your new todo" name="newTask">
            <select name="id">
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
            <input class="button" type="submit" value="Add">
          </form>
        </div>
        <a href="folders">Folders</a>
        <a href="tasks">Tasks</a>

<?php }
}
