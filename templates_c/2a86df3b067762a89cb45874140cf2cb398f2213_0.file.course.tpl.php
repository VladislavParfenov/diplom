<?php
/* Smarty version 3.1.31, created on 2017-04-11 22:48:58
  from "C:\www\OpenServer\domains\diplom\site\templates\site\pages\course.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ed332a63a9a3_65544066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a86df3b067762a89cb45874140cf2cb398f2213' => 
    array (
      0 => 'C:\\www\\OpenServer\\domains\\diplom\\site\\templates\\site\\pages\\course.tpl',
      1 => 1491940136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ed332a63a9a3_65544066 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class=""><?php echo $_smarty_tpl->tpl_vars['course_name']->value;?>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
    <div class="tastks"><?php echo $_smarty_tpl->tpl_vars['task']->value['title_task'];?>
</div>
    <div class="tastks"><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<?php }
}
