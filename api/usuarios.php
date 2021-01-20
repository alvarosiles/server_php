<?php

//localost:8080/.../api/usuarios.php
//echo "Metodo http: " . $_SERVER['REQUEST_METHOD'];

switch ($_SERVER['REQUEST_METHOD']) {

    case 'POST':
        echo "guardar";
        break;

    case 'GET':
        echo "obtener usuario/100";
        break;

    case 'PUT':
        echo "actualizar usuario/1";
        break;

    case 'DELETE':
        echo "eliminar usuario/1";
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
