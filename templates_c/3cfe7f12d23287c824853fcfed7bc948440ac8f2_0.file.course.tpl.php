<?php
/* Smarty version 3.1.31, created on 2017-04-12 23:07:35
  from "C:\www\OpenServer\domains\diplom\site\templates\admin\pages\course.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee89071e2415_64974986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cfe7f12d23287c824853fcfed7bc948440ac8f2' => 
    array (
      0 => 'C:\\www\\OpenServer\\domains\\diplom\\site\\templates\\admin\\pages\\course.tpl',
      1 => 1492027617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee89071e2415_64974986 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>

        </div>
        <div class="col-md-9">
            <div class="row">
                <form action="/admin/php/course.php" method="post">
                    <input type="hidden" name="action_course" value="edit_course">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
">
                    <div class="clo-md-6">
                        <div class="form-group">
                            <label for="">Название:</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
"
                                   placeholder="Название курса">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5>Задания по курсу</h5>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Название</th>
                                            <th>Описание</th>
                                            <th>Править/Удалить</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['task']->value['title_task'];?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</th>
                                                <th class="text-center">
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" data-task_id="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                        <button data-toggle="modal" data-target="#remove_task"  data-task_id="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" type="button" class="btn btn-danger remove_task"><i class="fa fa-times"></i></button>
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
                                    <div>
                                        <button type="button" data-toggle="modal" data-target="#add_task" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row text-center">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="add_task" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Добавление / Изминение задания</h4>
                </div>
                <div class="modal-body">
                    <form action="/admin/php/course.php" method="post">
                        <input type="hidden" name="action_course" value="edit_task">
                        <input type="hidden" name="task_id" value="0">
                        <input type="hidden" name="course_id" value="<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
">
                    <div class="form-group">
                        <label for="">Название задания:</label>
                        <input type="text" class="form-control" name="task_title" value="" placeholder="Title">
                    </div>
                        <div class="form-group">
                            <label for="">Описание задания:</label>
                            <textarea name="description" id="" rows="10" class="form-control" placeholder="Описане"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="remove_task" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Удаление задания</h4>
                </div>
                <div class="modal-body">
                    <form action="/admin/php/course.php" method="post">
                        <input type="hidden" name="action_course" value="remove_task">
                        <input type="hidden" name="task_id" value="0">
                        <input type="hidden" name="course_id" value="<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
">
                        <h2>Вы действительно хотите удалить это задание?</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><?php }
}
