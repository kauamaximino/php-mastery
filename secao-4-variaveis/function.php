<?php

  $global = 'var global';
  echo $global;

  echo "<br>";

  function test() {
    $local = 'var local';
    return $local;
  }

  echo test();

