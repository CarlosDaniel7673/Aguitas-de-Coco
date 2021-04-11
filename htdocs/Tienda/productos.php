<?php 

include_once '../Tienda/global/conexion.php';

class Productos extends Database {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProductos () {
        $devolverProductos = [];
        $query = $this->connect()->prepare('SELECT * FROM `tblproductos`');
        $query -> execute();
        while ($row = $query->fetch()) {
            $item = [
                'ID'            => $row ['ID'],
                'Nombre'        => $row ['Nombre'],
                'Precio'        => $row ['Precio'],
                'Descripcion'   => $row ['Descripcion'],
                'Descuento'     => $row ['Descuento'],
                'Cantidad'      => $row ['Cantidad']
            ];
            array_push($devolverProductos, $item);
        }
        return $devolverProductos;
    }

            // api 1
    public function getProductByID ($id) {
        $query = $this->connect()->prepare('SELECT * FROM `tblproductos` WHERE id = :id');
        $query -> execute(['id' => $id]);

        $producto = $query->fetch();

        return [
                'ID'            => $producto ['ID'],
                'Nombre'        => $producto ['Nombre'],
                'Precio'        => $producto ['Precio'],
                'Descripcion'   => $producto ['Descripcion'],
                'Descuento'     => $producto ['Descuento'],
                'Cantidad'      => $producto ['Cantidad'],
                'Fecha'         => $producto ['Fecha']
            ];
        }
        public function getProductByName ($nombre) {
            $devolverProductos = [];
            $query = $this->connect()->prepare("SELECT * FROM `tblproductos` WHERE Nombre LIKE '%$nombre%'");
            $query -> execute();
            while($row = $query -> fetch()) {
                $PRODUCTO = [
                'ID'            => $row ['ID'],
                'Nombre'        => $row ['Nombre'],
                'Precio'        => $row ['Precio'],
                'Descripcion'   => $row ['Descripcion'],
                'Descuento'     => $row ['Descuento'],
                'Cantidad'      => $row ['Cantidad'],
                'Fecha'         => $row ['Fecha']
                ];
                array_push($devolverProductos, $PRODUCTO);
            }
            return $devolverProductos;
        }

        public function getProductOrderDate($order) {
            $devolverProductos = [];
            strtoupper($order);
            if ($order == 'ASC' || $order == 'DESC')
                $query = $this->connect()->prepare("SELECT * FROM `tblproductos` ORDER BY Fecha $order");
            else return null;
            $query -> execute();
            while ($row = $query -> fetch()) {
                $PRODUCTO = [                
                'ID'            => $row ['ID'],
                'Nombre'        => $row ['Nombre'],
                'Precio'        => $row ['Precio'],
                'Descripcion'   => $row ['Descripcion'],
                'Descuento'     => $row ['Descuento'],
                'Cantidad'      => $row ['Cantidad'],
                'Fecha'         => $row ['Fecha']
                ];
                array_push($devolverProductos, $PRODUCTO); 
            }
            return $devolverProductos;
        }
        
}

?>