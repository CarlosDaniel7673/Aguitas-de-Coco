<?php
include 'global/conexion.php';
include 'carrito.php';
include 'cabecera.php';
?>

    <div class="container">
		
         <div class="alert alert-success">
            <!--//<?php echo $id?>-->
           <?php echo $mensajeCarrito2; ?>
            <a href="mostrarCarrito.php" class="badge badge-success">Ver carrito</a> 

	<br>
    </div>

	<div class="row">
	<?php
		$db = new Database();
		$query = $db->connect()->prepare('SELECT * FROM `tblproductos`');
		$query->execute();
		while ($producto = $query->fetch())
        {

/*PRESENTACIÓN PRODUCTOS*/
	?>
		<div class="col-3">
			<div class="card">
				<img
				title="<?php echo $producto['Nombre'];?>"
				alt="<?php echo $producto['Nombre'];?>" 
				class="card-img-top"
				src="<?php echo "../Aguita de coco/img/".$producto['ID'].".png";?>"
                onerror = "'../Aguita de coco/img/5.png'";
				data-toggle="popover"
				data-trigger="hover"
				data-content="<?php echo $producto['Descripcion'];?>"
				
				>
				<div class="card-body">
					<span><b><?php echo "$".$producto['Precio'];?></b></span>
					<h5 class="card-title"><?php $producto['Nombre']; ?></h5>
					<p class="card-text">"Descripción"</p>

				<form action="" method="post">
					<input type="hidden" name="ID" id="ID" value="<?php echo $producto['ID'];?>">
					<input type="hidden" name="Nombre" id="Nombre" value="<?php echo $producto['Nombre'];?>">
					<input type="hidden" name="Precio" id="Precio" value="<?php echo $producto['Precio'];?>"> 
					<input type="hidden" name="Cantidad" id="Cantidad" value="<?php echo 1;?>">

					<button class="btn btn-primary" 
						name="btnAccion" 
						value="Agregar" 
						type="submit"
						>
						Agregar al Carrito
					</button>
				</form>
				</div>
			</div>
		</div>
    <?php
        }
    ?>
	</div>
	<script>
		$(function () {
  		$('[data-toggle="popover"]').popover()
})
	</script>
</body>