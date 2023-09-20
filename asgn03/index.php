<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn03 - Static</title>
</head>
<body>
<h1> Inheritance Examples </h1>
<?php 
    include 'Bird.php';
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';
    
    
    ?>

<h1>Static Examples</h1>
<h2>Before Create Method</h2>

<?php
  echo 'Bird count: ' . Bird::$instance_count . '<br>';
  echo 'Yellow bellied fly catcher count: ' . YellowBelliedFlyCatcher::$instance_count . '<br>';
  echo 'Kiwi count: ' . Kiwi::$instance_count . '<br>';
  echo '<hr>';
  echo 'The yellow bellied fly catcher ' . YellowBelliedFlyCatcher::can_fly() . '.<br>';
  echo 'The kiwi ' . Kiwi::can_fly() . '.<br>';

?>

<h2>After Create Method</h2>
<?php
  $bird = Bird::create();
  $yellowBelliedFlyCatcher = YellowBelliedFlyCatcher::create();
  $kiwi = Kiwi::create();

  echo 'Bird count: ' . Bird::$instance_count . '<br>';
  echo 'Yellow bellied fly catcher count: ' . YellowBelliedFlyCatcher::$instance_count . '<br>';
  echo 'Kiwi count: ' . Kiwi::$instance_count . '<br>';
  echo '<hr>';

  echo 'Yellow bellied fly catchers have ' . YellowBelliedFlyCatcher::$egg_num . ' eggs. <br>';
?>

    </body>
</html>

