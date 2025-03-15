<?php

class Views
{

  public function getView($view, $data = [])
  {
    $view = VIEWS . $view . ".php";
    if(file_exists($view)){
        include $view;
    }
  }
}