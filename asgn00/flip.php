<?php

function flip() {
  return (rand(0, 1) == 0) ? 'Heads' : 'Tails';
}
echo flip();
?>