<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/public_header.php'); 
/* require_login(); */

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['user'];
  $user = new User($args);
  //save itself as a row in the db
  $result = $user->save();

  if($result === true) {
    $new_id = $user->id;
    $session->message('The user was created successfully.');
    redirect_to(url_for('/users/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $user = new User;
}

?>

<?php $page_title = 'Create User'; ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="user new">
    <h1>Create User</h1>

    <?php echo display_errors($user->errors); ?>

    <form action="<?php echo url_for('/users/new.php'); ?>" method="post">

      <?php include('form-fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create User" />
      </div>
    </form>

  </div>

</div>


