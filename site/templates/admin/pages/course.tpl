<div class="row">{$sidebar}</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            {$navbar}
        </div>
        <div class="col-md-9">
            <div class="row">
                <form action="/admin/php/course.php" method="post">
                    <input type="hidden" name="action_course" value="edit_course">
                    <input type="hidden" name="id" value="{$course.id}">
                    <div class="clo-md-6">
                        <div class="form-group">
                            <label for="">Название:</label>
                            <input type="text" name="name" class="form-control" value="{$course.name}"
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
                                        {foreach from=$tasks item=task}
                                            <tr>
                                                <th>{$task.id}</th>
                                                <th>{$task.title_task}</th>
                                                <th>{$task.description}</th>
                                                <th class="text-center">
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" data-task_id="{$task.id}" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                        <button data-toggle="modal" data-target="#remove_task"  data-task_id="{$task.id}" type="button" class="btn btn-danger remove_task"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                        {/foreach}
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
                        <input type="hidden" name="course_id" value="{$course.id}">
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
                        <input type="hidden" name="course_id" value="{$course.id}">
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
</div>