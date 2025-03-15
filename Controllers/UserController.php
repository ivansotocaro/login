<?php

class UserController extends Controller {

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION["user_id"])) {
            header("Location: " . BASE_URL);
            exit;
        }
    }

    function index()
    {
        $this->view->getView("dashboard/user/index");
    }

    function dashboard()
    {
        $this->view->getView("dashboard/dashboard");
    }

    public function getUser()
    {
        echo json_encode($this->model->getUser());
    }


}