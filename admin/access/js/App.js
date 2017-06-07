/**
 * Created by user on 12.04.2017.
 */
var App = {
    init:function(){
        this.removeTask();
    },
    removeTask:function(){
        var self = this;
        $('.remove_task').on('click', function () {
           var task_id = $(this).data('task_id');
           $('#remove_task').find('input[name=task_id]').val(task_id);
        });
    }

};
$(document).ready(function(){
   App.init();
});