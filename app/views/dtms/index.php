<?php if ($invalidAccount) : ?>
    <div class="alert alert-block">
        <h4 class="alert-heading">Login error!</h4>
        <div>Invalid Username/Password. Please try again.</div>
    </div>
<?php endif ?>
<?php if ($emptyFields) : ?>
    <div class="alert alert-block">
        <h4 class="alert-heading">Login error!</h4>
        <div>Provide Username/Password. Please try again.</div>
    </div>
<?php endif ?>

<form class="well" method="POST" action="">
    <table>
        <tr>
            <td><input type="text" name="username" placeholder="Username" /></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Password" /></td>
        </tr>
        <tr>
            <input type="hidden" value="task" name="homepage" />
            <td><input class="btn btn-primary" type="submit" name="login" value="Login" />&nbsp
            <input class="btn btn-primary" type="submit" name="sign_up" value="Sign up" /></td>
        </tr>
    </table>
</form>

