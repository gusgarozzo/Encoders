<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-14 15:43:58
  from 'C:\Program Files\Ampps\www\EncodersWebTest\templates\folders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61912ebede9402_04261730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9230cc391ad5fd859e5c6f865f2b1471e3b4c75f' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\EncodersWebTest\\templates\\folders.tpl',
      1 => 1636904493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61912ebede9402_04261730 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div class="footer">
        <ul class="todoList">
        <div class="folders_form">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['folders']->value, 'folder');
$_smarty_tpl->tpl_vars['folder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['folder']->value) {
$_smarty_tpl->tpl_vars['folder']->do_else = false;
?>
          <a class="folders" href="folders/<?php echo $_smarty_tpl->tpl_vars['folder']->value->id_folder;?>
"><?php echo $_smarty_tpl->tpl_vars['folder']->value->folder;?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <a class="folders" href="tasks">All</a>
        </div>
<?php }
}
