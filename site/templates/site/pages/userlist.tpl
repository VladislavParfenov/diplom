
<div class="container">
    <div class="row">
        {$navbar}
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-bordered">
                <thead>
                <tr>
                <th>#</th>
                <th>Login</th>
                <th>Email</th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$users item=user}
                <tr>
                    <th>{$user.id}</th>
                    <th><a href="user/{$user.id}">{$user.login}</a></th>
                    <th>{$user.email}</th>
                </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>





