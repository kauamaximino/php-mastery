<?php

  $x = 10;

  $y =& $x;

  echo $x;
  echo "<br>";
  echo $y;

  $x = 20;

  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;