<div id="content">
    <?php $user = $this->user; ?>
    <h1>Edit User</h1>
    <div style="padding: 0 10px 10px; margin-bottom: 10px; border: 1px #666666 solid;">
    <h3>User data</h3>
    <form action="<?php echo URL ?>user/saveEdit/<?php echo $user['id'] ?>" method="post">
        <label>Username</label><br />
        <input type="text" name="user" id="user" value="<?php echo $user['username'] ?>" /><br />            
        <label>Password</label><br />
        <input type="password" name="pass" id="pass" value="<?php echo $user['username'] ?>" /><br />
        <label>Role</label><br />
        <select name="role" id="role">
            <option value="Default" <?php if ($user['role'] == 'default') echo 'selected' ?>>Default</option>
            <option value="Admin" <?php if ($user['role'] == 'admin') echo 'selected' ?>>Admin</option>
            <option value="Owner" <?php if ($user['role'] == 'owner') echo 'selected' ?>>Owner</option>
        </select>
        <input type="hidden" name="id" id="id" value="<?php echo $user['id'] ?>">            
        <br />
        <br />
        <input type="submit" value="Edit" />
    </form>
    </div>
</div>
