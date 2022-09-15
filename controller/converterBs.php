<?php
    require_once("../config/config.php");
    require_once("../models/Monedas.php");
    $datos = new Monedas();
    switch($_GET["opt"]){

        case "getAll":
        $datos = $datos->get_all();
        if ($datos['DATE'] === null) {
        header("HTTP/1.1 404 Not Found");
        exit();
        }
        else
        header("HTTP/1.1 200 OK");
        echo json_encode($datos);
        break;

       default:
       header("HTTP/1.1 400 Bad Request");
       exit();
    }