<?php
  function greet($name, $color) {
    echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
  }

  greet('John', 'black');
  greet('Jane', 'blue');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
