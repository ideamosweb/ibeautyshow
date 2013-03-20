<div id="content">    
    <h1>User</h1>
    <br />
    <br />
    <div style="padding: 0 10px 10px; margin-bottom: 10px; border: 1px #666666 solid;">
    <h3>Create User</h3>
    <form action="<?php echo URL ?>user/create" method="post">
        <label>Username</label><br />
        <input type="text" name="user" id="user" /><br />            
        <label>Password</label><br />
        <input type="password" name="pass" id="pass" /><br />
        <label>Role</label><br />
        <select name="role" id="role">
            <option value="Default">Default</option>
            <option value="Admin">Admin</option>
        </select>
        <br />
        <br />
        <input type="submit" value="Create" />
    </form>
    </div>
    <h3>Users list</h3>
    <table id="userList">
    <?php
    /*foreach ($this->userList as $key => $value){
        echo '<tr>';
        echo '<td>'.$value['id'].'</td>';
        echo '<td>'.$value['username'].'</td>';
        echo '<td>'.$value['role'].'</td>';
        echo "<td><a href='".URL."user/edit/".$value['id']."'>Edit</a></td>";
        echo "<td><a href='".URL."user/delete/".$value['id']."'>Delete</a></td>";
        echo '</tr>';
    }*/    
    ?>
    </table>    
</div>
