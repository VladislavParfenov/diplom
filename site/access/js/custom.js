/**
 * Created by user on 09.04.2017.
 */
var Main = {
    init:function () {
      this.logOut();
    },
    logOut:function () {
        $('#logout').on('click', function (e) {
            e.preventDefault();
            $.post(location.origin + '/site/includes/php/Auth.php', {user_action:'logout'})
                .done(function (data) {
                    if(data){
                        location.reload();

                    }
                })
        })
    }
};
$(document).ready(function(){
   Main.init();
});