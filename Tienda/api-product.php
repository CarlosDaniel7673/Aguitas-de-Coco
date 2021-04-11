<?php

include_once 'productos.php';
include_once '../Tienda/global/conexion.php';

if (isset($_GET['nombre']) && isset($_GET['precio']) && isset($_GET['descripcion'])) {
    $NOMBRE = $_GET['nombre'];
    $PRECIO = $_GET['precio'];
    $DESCRIPCION = $_GET['descripcion'];

    if (is_string($NOMBRE) && (is_numeric($PRECIO)) && (is_string($DESCRIPCION))) {
        $DB = new Database();
        $sql = "INSERT INTO tblproductos (Nombre, Precio, Descripcion, Cantidad)
        VALUES ('$NOMBRE', '$PRECIO', '$DESCRIPCION', 1)";
        if ($DB->connect()->query($sql))
        echo json_encode(['statuscode' => 200, 'respuesta' => 'CREADO']);
    } else {
        echo json_encode(['statuscode' => 400, 'response' => 'Error con tipo de datos.']);
    }
} else {
    echo json_encode(['statuscode' => 400, 'response' => 'Faltan parametros.']);
}

?>