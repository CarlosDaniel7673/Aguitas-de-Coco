<?php
include 'global/conexion.php';
include 'carrito.php';
include 'cabecera.php';
?>

<?php
if($_POST){
    $total=0;
    $SID=session_id();
    $Correo= "daniel@gmail.com";

    foreach($_SESSION['Carrito'] as $indice=> $producto){
        $total=$total+($producto['Precio']*$producto['Cantidad']);
    }
        $DB = new Database();
        $sentencia=$DB->connect()->prepare("INSERT INTO `tblventas` (`ID`, `Correo`, `Fecha`, `Total`, `status`) 
        VALUES (NULL, :Correo, NOW(),:Total, 'pendiente');");

        $sentencia->bindParam(":Correo",$Correo);
        $sentencia->bindParam(":Total",$total);
        $sentencia->execute();
        $idventas=$DB->connect()->lastInsertId();

    echo "<h3>".$total."</h3>";
}
?>