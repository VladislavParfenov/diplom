<?php
/* Smarty version 3.1.31, created on 2017-04-12 23:09:31
  from "C:\www\OpenServer\domains\diplom\site\templates\site\pages\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ee897b701d59_33228837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc08eb9ff793c659d7be107049bdac30db1f1962' => 
    array (
      0 => 'C:\\www\\OpenServer\\domains\\diplom\\site\\templates\\site\\pages\\index.tpl',
      1 => 1492027768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee897b701d59_33228837 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row">
        <?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>

    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Register</h2>
            <form action="site/includes/php/Auth.php" method="post">
                <input type="hidden" name="user_action" value="register">
                <div class="form-group">
                    <input class="form-control" type="text" name="login" placeholder="login">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Register">
                </div>

            </form>
        </div>


        <div class="col-md-6">
            <div class="lofin">
                <h2>Login</h2>
                <form action="site/includes/php/Auth.php" method="post">
                    <input type="hidden" name="user_action" value="login">
                    <div class="form-group">
                        <input class="form-control" type="text" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Pass">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="Login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<?php }
}
