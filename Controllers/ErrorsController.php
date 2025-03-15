<?php
//All controllers extend from Controller
class ErrorsController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->getView("Errors/errors");
  }

}
