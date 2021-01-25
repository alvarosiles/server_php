<?php

class Usuario
{

    private $userId;
    private $userName;
    private $password;
    private $tipo;

    public function __construct($userId,$userName, $password, $tipo)
    {
        $this->userId = $userId;
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

    public function __toString()
    {
        return $this->userId . " " . $this->userName . " " . $this->password . " " . "(" . $this->tipo . ")";
    }


    public function guardarUsuario()
    {
        $contenidoArchivo = file_get_contents("../data/usuarios.json");
        $usuarios = json_decode($contenidoArchivo, true);
        $usuarios[] = array(
            "userId" => $this->userId,
            "userName" => $this->userName,
            "password" => $this->password,
            "tipo" => $this->tipo
        );
        $archivo = fopen("../data/usuarios.json", "w");
        fwrite($archivo, json_encode($usuarios));
        fclose($archivo);
    }


    public static function obtenerUsuarios()
    {
        $contenidoArchivo = file_get_contents("../data/usuarios.json");
        echo $contenidoArchivo;
    }

    public static function obtenerUsuario($indice)
    {
        $contenidoArchivo = file_get_contents("../data/usuarios.json");
        $usuarios = json_decode($contenidoArchivo, true);
        echo json_encode($usuarios[$indice]);
    }



    public function actualizarUsuario($indice)
    {
        $contenidoArchivo = file_get_contents("../data/usuarios.json");
        $usuarios = json_decode($contenidoArchivo, true);

        $usuario = array(
            'userId' => $this->userId,
            'userName' => $this->userName,
            'password' => $this->password,
            'tipo' => $this->tipo
        );

        $usuarios[$indice] = $usuario;
        $archivo = fopen('../data/usuarios.json', 'w');
        fwrite($archivo, json_encode($usuarios));
        fclose($archivo);
    }
    public static function eliminarUsuario($indice)
    {
        $contenidoArchivo = file_get_contents("../data/usuarios.json");
        $usuarios = json_decode($contenidoArchivo, true);
        array_splice($usuarios, $indice, 1);
        $archivo = fopen('../data/usuarios.json', 'w');
        fwrite($archivo, json_encode($usuarios));
        fclose($archivo);
    }
}
