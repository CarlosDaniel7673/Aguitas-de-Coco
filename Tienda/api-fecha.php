<?php

include_once 'productos.php';

if (isset($_GET['order'])) {
    $prods = new Productos();
    $order = $_GET['order'];
    if ($order == '') {        
        echo json_encode(['statuscode' => 400, 'response' => 'Inserte un orden. ASC or DESC.']);
    } else if ($prods->getProductOrderDate($order)[0] != null) {
        echo json_encode(['statuscode' => 200, 'productos' => $prods->getProductOrderDate($order)]);
    } else {
        echo json_encode(['statuscode' => 400, 'response' => 'Inserte un orden. ASC or DESC.']);
    }
} else {
    echo json_encode(['statuscode' => 400, 'response' => 'Faltan parametros.']);
}

?>