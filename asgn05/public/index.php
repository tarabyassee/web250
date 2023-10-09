<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public-header.php'); ?>

<div id="main">

  <ul>
    <li><a href="<?php echo urlFor('/bicycles.php'); ?>">View Our Inventory</a></li>
    <li><a href="<?php echo urlFor('/about.php'); ?>">About Us</a></li>
  </ul>
</div>
<?php include (SHARED_PATH . '/public-footer.php');?>