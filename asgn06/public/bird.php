<?php 
  require_once('../private/initialize.php');
  $page_title = 'Sightings';
  include(SHARED_PATH . '/public-header.php');

?>


<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>
<div id="birdContainer">
  <img src="images/carolinaWren.jpg" width="171" height="123">
  <img src="images/tuftedTitmouse.jpg" width="161" height="121">
  <img src="images/rubyThroatedHummingbird.jpg" width="227" height="120">
  <img src="images/easternTowhee.jpg" width="1280" height="959">
  <img src="images/indigoBunting.jpg" width="1280" height="960">
</div>
<table id="birds" border="1">
  <tr>
    <th>Common Name</th>
    <th>Habitat</th>
    <th>Food</th>
    <th>Nest Placement</th>
    <th>Behavior</th>
    <th>Conservation ID</th>
    <th>Backyard Tips</th>
  </tr>
  <?php $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
  $birdArray = $parser->parse();
  // print_r($birdArray);
  ?>
    <?php foreach($birdArray as $args) {?>
    <?php $bird = new Bird ($args);?>
  <tr>
    <td><?php echo h($bird->commonName);?></td>
    <td><?php echo h($bird->habitat);?></td>
    <td><?php echo h($bird->food);?></td>
    <td><?php echo h($bird->nestPlacement);?></td>
    <td><?php echo h($bird->behavior);?></td>
    <td><?php echo h($bird->conservation());?></td>
    <td><?php echo h($bird->backyardTips);?></td>
  </tr>
  <?php } ?>
</table>

<?php include (SHARED_PATH . '/public-footer.php');?>
