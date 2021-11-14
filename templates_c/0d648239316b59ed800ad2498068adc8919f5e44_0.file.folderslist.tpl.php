<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-14 16:02:23
  from 'C:\Program Files\Ampps\www\EncodersWebTest\templates\folderslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6191330fdd6b54_38488678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d648239316b59ed800ad2498068adc8919f5e44' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\EncodersWebTest\\templates\\folderslist.tpl',
      1 => 1636905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
  ),
),false)) {
function content_6191330fdd6b54_38488678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="footer">
        <ul class="todoList">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['folders']->value, 'folder');
$_smarty_tpl->tpl_vars['folder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['folder']->value) {
$_smarty_tpl->tpl_vars['folder']->do_else = false;
?>
            <li>
              <div>
                <a href="folders/<?php echo $_smarty_tpl->tpl_vars['folder']->value->id_folder;?>
"><?php echo $_smarty_tpl->tpl_vars['folder']->value->folder;?>

              </div>
              <div>
                <a href="deleteFolder/<?php echo $_smarty_tpl->tpl_vars['folder']->value->id_folder;?>
">Delete</a>
              </div>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
      </body>
</html><?php }
}
