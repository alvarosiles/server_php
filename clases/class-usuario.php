<?php

class Usuario
{

    private $userId;
    private $userName;
    private $password;
    private $tipo;

    public function __construct($userName, $password, $tipo)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->tipo = $tipo;
    }
    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        return $this->userId = $userId;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        return $this->userName = $userName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }


    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        return $this->tipo = $tipo;
    }
}
