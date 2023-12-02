<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($user)) {
  redirect_to(url_for('/users/index.php'));
}
?>

<dl>
  <dt>First Name</dt>
  <dd><input type="text" name="user[first_name]" value="<?php echo h($user->first_name); ?>" /></dd>
</dl>

<dl>
  <dt>Last Name</dt>
  <dd><input type="text" name="user[last_name]" value="<?php echo h($user->last_name); ?>" /></dd>
</dl>

<dl>
  <dt>Email</dt>
  <dd><input type="text" name="user[email]" value="<?php echo h($user->email); ?>" /></dd>
</dl>

<dl>
  <dt>Username</dt>
  <dd><input type="text" name="admin[username]" value="<?php echo h($admin->username); ?>" /></dd>
</dl>

<dl>
  <dt>Password</dt>
  <dd><input type="password" name="admin[password]" value="" /></dd>
</dl>

<dl>
  <dt>Confirm Password</dt>
  <dd><input type="password" name="admin[confirm_password]" value="" /></dd>
</dl>
