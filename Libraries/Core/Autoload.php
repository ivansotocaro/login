<?php

spl_autoload_register(function ($class) {

  if (file_exists(LIBS . "Core/" . $class . ".php")) {
    include LIBS . "Core/" . $class . ".php";
  }

});
