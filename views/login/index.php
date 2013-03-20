<div id="content">
    <h1>Login</h1>
    <form action="<?php echo URL ?>login/doLogin" method="post" id="formLogin">
        <label>Username:</label><span class="error" id="user_error" style="color: red;">Username can't be blank</span><br/>
        <input type="text" name="user" id="user" /><br/>
        <label>Password:</label><span class="error" id="pass_error" style="color: red;">Password can't be blank</span><br/>
        <input type="password" name="password" id="pass" /><br/>
        <input type="submit" value="submit" id="submit" />
    </form>
</div>
