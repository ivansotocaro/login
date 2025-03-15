<?php

class UserController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->getView("dashboard/user/index");
    }

    public function getUser()
    {
        echo json_encode($this->model->getUser());
    }


}