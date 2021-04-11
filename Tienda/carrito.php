<?php
session_start();

include_once 'productos.php';

$mensajeCarrito = "";
$mensajeCarrito2 = "";
$NUMPRODUCTOS = 0;

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':

            if(is_numeric($_POST['ID'])) {
                $mensajeCarrito = "Correct ID.";
                // Agg

            } else {
                $mensajeCarrito = "Incorrect ID.";
                break;
            }
            
            if (is_string($_POST['Nombre'])) {
                $NOMBRE = $_POST['Nombre'];
            } else {
                $mensaje = "Incorrect Name.";
                break;
            }

            if (is_numeric($_POST['Cantidad'])) {
                $CANTIDAD = $_POST['Cantidad'];
            } else {
                $mensaje = "Incorrect amount";
                break;
            }

            if (is_numeric($_POST['Precio'])) {
                $PRECIO = $_POST['Precio'];
            } else {
                $mensaje = "Incorrect price";
                break;
            }

            // Validando la sesión

            $prods = new Productos();

            if (!isset($_SESSION['Carrito'])) {
                $producto = $prods->getProductByID($_POST['ID']);
                $_SESSION['Carrito'][$NUMPRODUCTOS] = $producto;
                $NUMPRODUCTOS = 0;
               /* $producto = array (
                        'ID' => $ID,
                        'Nombre' => $Nombre,
                        'Precio' => $Precio,
                        'Cantidad' => $Cantidad,
                        'Descripcion' => $Descripcion
                );*/
            } else {
                
                $NUMPRODUCTOS = count($_SESSION['Carrito']);
                $producto = $prods->getProductByID($_POST['ID']);
                $_SESSION['Carrito'][$NUMPRODUCTOS] = $producto;
            }
            /* $mensajeCarrito2 = print_r($_SESSION, true); (prueba de codigo)*/ 
            $mensajeCarrito2 = $producto['Nombre'].", agregado correctamente al carrito.";

        break;
        case 'Eliminar':
            if (is_numeric($_POST['ID'])) {
                $ID = $_POST['ID'];
                    foreach($_SESSION['Carrito'] as $indice=>$producto) {
                        if ($producto['ID'] == $ID){
                            unset($_SESSION['Carrito'][$indice]);
                            echo "<script>alert('ELIMINADO ELEMENTO');</script>";
                            break;
                        }
                    }
            } else {
                break;
            }
            break;
    } 
}
?>