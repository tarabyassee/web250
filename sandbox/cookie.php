<?php
class RoundCookie {
  var $weight;
  var $color;
  var $icing;
  
  function decorate() {
    // must have return $this to return this class
      return "drizzle " . $this->icing; 
  }

  function consume() {

  }
}

$cookie1 = new RoundCookie;
$cookie1->weight = "2 oz.";
$cookie1->color = "white";
$cookie1->icing = "buttercream";

$cookie2 = new RoundCookie;
$cookie2->weight = "4 oz.";
$cookie2->color = "brown";
$cookie2->icing = "no icing";

echo "<p>My first cookie weighs " . $cookie1->weight . " it is " . $cookie1->color . " and is covered with " . $cookie1->icing . ".</p>" ;

echo "<p>I will" . $cookie1->decorate() . ".</p>";

echo "<p>My second cookie weighs " . $cookie2->weight . " it is " . $cookie2->color . " and is covered with " . $cookie2->icing . ".</p>" ;

?>
