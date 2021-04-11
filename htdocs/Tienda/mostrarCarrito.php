<?php 
include 'global/config.php';
include 'carrito.php';
include 'cabecera.php';

?>
<body>
<br>
<h3>Lista del carrito</h3>
<?php if (!empty($_SESSION['Carrito'])) { ?>

<table class="table table-light table.bordered">
    <tbody>
        <?php
            $TOTAL = 0;
            foreach($_SESSION['Carrito'] as $indice=>$producto) { ?>
                <tr>
                <th width="40%"><?php echo $producto['Nombre'] ?></th>
                <th width="15%"><?php echo $producto['Cantidad'] ?></th>
                <th width="20%"><?php echo $producto['Precio'] ?></th>
                <th width="20%"><?php echo number_format($producto['Precio']*$producto['Cantidad'],2) ?></th>
                <th width="5%"> 
                
                <form action="" method="post">
                
                <input type="hidden"

                name="ID"
                id="ID"
                value="<?php echo $producto['ID'];?>">

                    <button
                    class="btn btn-danger"
                    type="submit"
                    name="btnAccion"
                    value="Eliminar"
                    >Eliminar</button>
                </form>
            </tr>

                
            <?php 
            $TOTAL += ($producto['Precio']*$producto['Cantidad']);
        } 
        ?>
        <tr>
            <td colspan = "3" align = "right"><h3>Total</h3></td>
            <td align ="right"><h3>$<?php echo number_format($TOTAL, 2);?></td>
            <td></td>
        </tr>
        <tr> 
            <td colspan="5">
            <form action="Pagar.php" method="post">
            <div class="alert alert-success">
            <div class="form-group">
                    <label for="my-input">Correo contacto:</label>
                    <input id="email" name="email" 
                    class="form-control" 
                    type="email"
                    placeholder="Por favor escribe tú correo"
                    required>
                </div>
                <small id="emailHelp"
                class= "form-text text-muted"
                >
                Se contactaran a este correo contigo para poder seguir tú proceso de pago.
                </small>
            </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" 
                name="btnAccion"
                value="proceder">
                Agendar >>
                </button>
            </form>    
 
        </tr>
    
    </tbody>
</table>

<?php } else { ?>
<div class = "alert alert-primary">
    CARRO VACIO
</div>

<?php } ?>
</body>