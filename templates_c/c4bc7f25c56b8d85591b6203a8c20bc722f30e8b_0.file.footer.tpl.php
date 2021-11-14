<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-14 06:36:18
  from 'C:\Program Files\Ampps\www\EncodersWebTest\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6190ae6282a907_36605978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4bc7f25c56b8d85591b6203a8c20bc722f30e8b' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\EncodersWebTest\\templates\\footer.tpl',
      1 => 1636823284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6190ae6282a907_36605978 (Smarty_Internal_Template $_smarty_tpl) {
?>        <div class="footer">
        <ul class="todoList">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
            <li>
              <div>
                <input type="checkbox" name="" id="<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['task']->value->tarea;?>

              </div>
              <div>
                <a href="editTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
">Edit</a>
                <a href="delete/<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
">Delete</a>
              </div>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        </div>
      </div>
      </body>
</html><?php }
}
