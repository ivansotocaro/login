<?php

//All controllers extend from Controller
class LoginController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->getView("dashboard/login/index");
  }


  public function signIn()
  {
    
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
      echo json_encode(["status" => 405, "message" => "Método no permitido"]);
      exit;
    }
    
    if (!parent::validateData($_POST)) {
      echo json_encode(["status" => 400, "message" => "Datos de entrada inválidos"]);
      exit;
    }
    
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    
    $user = $this->model->getUserByEmail($email);
    
    if ($user && password_verify($password, $user["password"])) {
      
        echo json_encode(["status" => 200, "message" => "Inicio de sesión exitoso"]);
    } else {
        echo json_encode(["status" => 401, "message" => "Correo o contraseña incorrectos"]);
    }

  }

}
