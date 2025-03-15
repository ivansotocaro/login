<?php

class Controller
{
    /**
     * @var Model
     */
    public $model;
    /**
     * @var Views
     */
    public $view;

  public function __construct()
  {
    $this->view = new Views();
    $this->loadModel();
  }

  public function loadModel()
  {
    $model =  str_replace("Controller", "Model", get_class($this));
    $modelClass = "Models/" . $model . ".php";

    if (file_exists($modelClass)) {

      include $modelClass;
      $this->model = new $model();

    }
  }

  public function validateData($data)
  {
    
    if (!isset($data["email"], $data["password"])) {
        return false;
    }

    if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    if (strlen(trim($data["password"])) < 6) {
        return false;
    }

    return true;
  }

}
