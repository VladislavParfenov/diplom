
<div class="container">
    <div class="row">
        {$navbar}
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





