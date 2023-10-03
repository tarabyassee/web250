<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>

<?php include(SHARED_PATH . '/public-header.php'); ?>

  <div id="main">
    <div id="page">
      <div class="intro">
        <img class="inset" src="<?php echo urlFor('/images/AdobeStock_55807979_thumb.jpeg') ?>">
        <h2>Our Inventory of Used Bicycles</h2>
        <p>Choose the bike you love.</p>
        <p>We will deliver it to your door and let you try it before you buy it.</p>
      </div>

      <table id="inventory">
        <tr>
          <th>Brand</th>
          <th>Model</th>
          <th>Year</th>
          <th>Category</th>
          <th>Gender</th>
          <th>Color</th>
          <th>Weight</th>
          <th>Condition</th>
          <th>Price</th>
        </tr>
  <?php
  $parser = new ParseCSV(PRIVATE_PATH . '/used-bicycles.csv');
  $bikeArray = $parser->parse();

  /* print_r($bikeArray);

  $args = ['brand'=> 'Trek', 'model' => 'Emonda', 'year'=> 2017, 'gender' => 'unisex', 'color' => 'black', 'category' => 'Road', 'weightKg' => 1.5, 'price' => 1000.00]; */
  /* $bike = new Bicycle($args); */
  ?>
        <?php foreach($bikeArray as $args) { ?>
        <?php $bike = new Bicycle($args); ?>
        <tr>
          <td><?php echo h($bike->brand); ?></td>
          <td><?php echo h($bike->model); ?></td>
          <td><?php echo h($bike->year); ?></td>
          <td><?php echo h($bike->category); ?></td>
          <td><?php echo h($bike->gender); ?></td>
          <td><?php echo h($bike->color); ?></td>
          <td><?php echo h($bike->weightKg()) . ' /' . h($bike->weightLbs()); ?></td>
          <td><?php echo h($bike->condition()); ?></td>
          <td><?php echo '$' . h($bike->price); ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
