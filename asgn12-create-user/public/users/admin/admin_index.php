<?php
require_once('../../../private/initialize.php');

require_login();
?>

<?php
  
// Find all admins
$users = User::find_all();
  
?>
<?php $page_title = 'Users'; 
 include(SHARED_PATH . '/../../private/shared/admin_header.php');

 if(!$session->is_admin_logged_in()){
  header("Location: ../../birds.php");
  exit;
 }
?> 
<a class="action" href="<?php echo url_for('birds.php'); ?>">Birds</a><br>
<a class="action" href="<?php echo url_for('users/logout.php'); ?>">Logout, <?php echo $session->first_name?></a>

<div id="content">
  <div class="users listing">
    <h1>Users</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('users/new.php'); ?>">Add User</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Username</th>
        <th>User Level</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($users as $user) { ?>
        <tr>
          <td><?php echo h($user->id); ?></td>
          <td><?php echo h($user->first_name); ?></td>
          <td><?php echo h($user->last_name); ?></td>
          <td><?php echo h($user->email); ?></td>
          <td><?php echo h($user->username); ?></td>
          <td><?php echo h($user->user_level); ?></td>
          <td><a class="action" href="<?php echo url_for('/users/show.php?id=' . h(u($user->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/users/edit.php?id=' . h(u($user->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/users/delete.php?id=' . h(u($user->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>


