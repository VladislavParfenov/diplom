<div class="row">{$sidebar}</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            {$navbar}
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
                {foreach from=$courses item=course}
                <tr>
                    <th>
                        {$course.id}
                    </th>
                    <th>
                        {$course.name}
                    </th>
                    <th>50</th>
                    <th class="text-center">
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="course/{$course.id}" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-times"></i></button>
                        </div>
                    </th>
                </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>