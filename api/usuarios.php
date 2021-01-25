<?php

//localost:8080/.../api/usuarios.php
//echo "Metodo http: " . $_SERVER['REQUEST_METHOD'];
//echo "informacion: " . file_get_contents('php://input');

header("Content-Type: application/json");
include_once("../clases/class-usuario.php");

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $_POST = json_decode(file_get_contents('php://input'), true);
        $usuario = new Usuario($_POST['userId'], $_POST['userName'], $_POST['password'], $_POST['tipo']);
        $usuario->guardarUsuario();
        $resultado["mensaje"] = "guardar usuario, informacion:" . json_encode($_POST);
        echo json_encode($resultado);
        break;
    case 'GET':
        if (isset($_GET['id'])) {
            Usuario::obtenerUsuario($_GET['id']);
            //$resultado["mensaje"] = "retornar el usuario con el id:" . $_GET['id'];
            //echo json_encode($resultado);
        } else {
            Usuario::obtenerUsuarios();
            //$resultado["mensaje"] = "retornar todos los usuarios";
            //echo json_encode($resultado);
        }
        break;
    case 'PUT':
        $_PUT = json_decode(file_get_contents('php://input'), true);
        $resultado["mensaje"] = "actualizar un usuario con el id: " . $_GET['id'] . ",informacion a actualizar" . json_encode($_PUT);
        echo json_encode($resultado);
        break;
    case 'DELETE':
        Usuario::eliminarUsuario($_GET['id']);
        $resultado["mensaje"] =  "eliminar un usuario con el id: " . $_GET['id'];
        echo json_encode($resultado);
        break;
}


//recibir peticion usuario 
//crear un usuario
//post
//obtener todos los usuarios
//get
//actualizar un usuario
//put
//eliminar un usuario
//delete





/*
api
interface proramacion apliacion


formato simple y estructurado en 
json formato
xsml formato


arquitectectura
rest api

representacional state transfer
tranferia de estado representacional

caracteristicas
protocolo lciente - servidor
consjunto de operaciones bien definidas
sintaxis universal para identificar recursos (uri)

operaciones - para metodos http
crear c - post   
leer r - get
actulizar u - put
eliminar d - delete

*/
