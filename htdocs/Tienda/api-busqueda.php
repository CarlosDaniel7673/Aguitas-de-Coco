<?php

include_once 'productos.php';

if (isset($_GET['nombre'])) {
    $prods = new Productos();
    $nombre = $_GET['nombre'];
    if ($nombre == '') {        
        echo json_encode(['statuscode' => 400, 'response' => 'Inserte un nombre.']);
    } else if ($prods->getProductByName($nombre)[0] != null) {
        echo json_encode(['statuscode' => 200, 'productos' => $prods->getProductByName($nombre)]);
    } else {
        echo json_encode(['statuscode' => 400, 'response' => 'No existen productos con ese nombre']);
    }
} else {
    echo json_encode(['statuscode' => 400, 'response' => 'Faltan parametros.']);
}

?>