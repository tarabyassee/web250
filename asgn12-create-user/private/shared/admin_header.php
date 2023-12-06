<!doctype html>

<html lang="en">
  <head>
    <title>Admins Only <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <link href="<?php echo url_for('stylesheets/styles.css');?>" rel="stylesheet">
    <meta charset="utf-8">
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('users/admin/admin_main_index.php'); ?>">
          Admins
        </a>
      </h1>
    </header>
