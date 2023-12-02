<?php require_once('../../private/initialize.php');
  include(SHARED_PATH . '/public_header.php');
  require_login();
?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$user = User::find_by_id($id);

?>

<?php $page_title = 'Show User: ' . h($user->first_name); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="user show">

    <h1>User: <?php echo h($user->full_name); ?></h1>

    <div class="attributes">
      <dl>
        <dt>First Name</dt>
        <dd><?php echo h($user->first_name); ?></dd>
      </dl>
      <dl>
        <dt>Last Name</dt>
        <dd><?php echo h($user->last_name); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($user->email); ?></dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><?php echo h($user->username); ?></dd>
      </dl>
    </div>

  </div>

</div>
