<?php
//All models extend from Model
class LoginModel extends Connection{
    /**
     * @var PDO
     */
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function getUser(): array
    {
        $stmt = $this->con->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByEmail($email)
    {
        $stmt = $this->con->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function registerUser(string $email, string $password): bool
    {

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $this->con->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");

        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $hashedPassword, PDO::PARAM_STR);

        return $stmt->execute();
    }

}