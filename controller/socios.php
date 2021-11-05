<?php
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Socios.php");
    $socios = new Socios();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetSocios":
            $datos=$socios->get_socios();
            echo json_encode($datos);
        break;

        case "GetUnSocio":
            $datos=$socios->get_socio($body["id"]);
            echo json_encode($datos);
        break;

        case "InsertSocio":
            $datos=$socios->insert_socio($body["nombre"],$body["razon_social"],$body["direccion"],$body["tipo_socio"],$body["contacto"],$body["email"],$body["fecha_creado"],$body["estado"],$body["telefono"]);
            echo json_encode("Socio agregado");
        break;

        case "DeletetSocio":
            $datos=$socios->delete_socio($body["id"]);
            echo json_encode("Socio Eliminado");
        break;

        //UPDATE
        case "UpdateSocio":
            $datos=$socios->update_socio($body["nombre"],$body["razon_social"],$body["direccion"],$body["tipo_socio"],$body["contacto"],$body["email"],$body["fecha_creado"],$body["estado"],$body["telefono"],$body["id"]);
            echo json_encode("Socio Actualizado");
        break;
        
    }
?>