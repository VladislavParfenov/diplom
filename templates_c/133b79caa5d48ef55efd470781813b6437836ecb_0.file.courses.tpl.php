<?php
/* Smarty version 3.1.31, created on 2017-04-12 22:00:09
  from "C:\www\OpenServer\domains\diplom\site\templates\admin\pages\courses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee79395ae256_48557255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '133b79caa5d48ef55efd470781813b6437836ecb' => 
    array (
      0 => 'C:\\www\\OpenServer\\domains\\diplom\\site\\templates\\admin\\pages\\courses.tpl',
      1 => 1492023606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee79395ae256_48557255 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>

        </div>
        <div class="col-md-9">
            <div class="row text-center">
                <h1>Курсы</h1>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th>Кол-во заданий</th>
                    <th>Править/Удалить</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courses']->value, 'course');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
?>
                <tr>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>

                    </th>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>

                    </th>
                    <th>50</th>
                    <th class="text-center">
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="course/<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button>
                        </div>
                    </th>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
