<?php

include_once 'productos.php';

if (isset($_GET['id'])) {
    $prods = new Productos();
    $id = $_GET['id'];
    if ($id == '') {
        
        echo json_encode(['statuscode' => 200, 'productos' => $prods->getAllProductos()]);
    } else if ($prods->getProductByID($id) ['ID'] != null){
        echo json_encode(['statuscode' => 200, 'productos' => $prods->getProductByID($id)]);
    } else {
        echo json_encode(['statuscode' => 400, 'response' => 'No existe esa ID']);
    }
} else {
    echo json_encode(['statuscode' => 400, 'response' => 'Faltan parametros.']);
}

?>