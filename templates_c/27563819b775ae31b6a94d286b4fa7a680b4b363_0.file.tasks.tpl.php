<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-14 15:58:27
  from 'C:\Program Files\Ampps\www\EncodersWebTest\templates\tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619132232466f8_27655621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27563819b775ae31b6a94d286b4fa7a680b4b363' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\EncodersWebTest\\templates\\tasks.tpl',
      1 => 1636905333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619132232466f8_27655621 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
            <li>
              <div>
                <input type="checkbox" class="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
"><label><?php echo $_smarty_tpl->tpl_vars['task']->value->tarea;?>
</label>
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
