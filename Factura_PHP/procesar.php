<?php


function calcularTotalProducto($precio, $cantidad, $aplicarIva) {
    $subtotal = $precio * $cantidad;
    $iva = 0;
    
    if ($aplicarIva) {
        $iva = $subtotal * 0.15; 
    }
    
    $total = $subtotal + $iva;
    
    return [
        'subtotal' => $subtotal,
        'iva' => $iva,
        'total' => $total
    ];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
  
    $nombre = $_POST['txt_nombre'];
    $email = $_POST['txt_email'];
    $fecha = $_POST['txt_fecha'];
    $comentarios = $_POST['txt_comentarios'];
    
  
    $productos = [
        $_POST['txt_producto1'],
        $_POST['txt_producto2'],
        $_POST['txt_producto3']
    ];
    
    $precios = [
        $_POST['txt_precio1'],
        $_POST['txt_precio2'],
        $_POST['txt_precio3']
    ];
    
    $cantidades = [
        $_POST['txt_cantidad1'],
        $_POST['txt_cantidad2'],
        $_POST['txt_cantidad3']
    ];
    
    $categorias = [
        $_POST['select_categoria1'],
        $_POST['select_categoria2'],
        $_POST['select_categoria3']
    ];
    
    $aplicarIva = [
        isset($_POST['chk_iva1']) ? true : false,
        isset($_POST['chk_iva2']) ? true : false,
        isset($_POST['chk_iva3']) ? true : false
    ];
    
    // Calcular totales
    $subtotalGeneral = 0;
    $totalIvaGeneral = 0;
    $totalGeneral = 0;
    
    $detallesProductos = [];
    
    for ($i = 0; $i < count($productos); $i++) {
        $resultado = calcularTotalProducto($precios[$i], $cantidades[$i], $aplicarIva[$i]);
        $detallesProductos[] = $resultado;
        
        $subtotalGeneral += $resultado['subtotal'];
        $totalIvaGeneral += $resultado['iva'];
        $totalGeneral += $resultado['total'];
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura Generada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0">Factura Generada</h3>
                    </div>
                    <div class="card-body">
                        
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <h4 class="text-primary">Datos del Cliente</h4>
                                <hr>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Nombre:</strong> <?php echo $nombre; ?>
                            </div>
                            <div class="col-md-6">
                                <strong>Email:</strong> <?php echo $email; ?>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Fecha:</strong> <?php echo $fecha; ?>
                            </div>
                            <div class="col-md-6">
                                <strong>Comentarios:</strong> <?php echo $comentarios; ?>
                            </div>
                        </div>
                        
                        <!-- Tabla de Productos -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h4 class="text-primary">Detalle</h4>
                                <hr>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Categoría</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                        <th>IVA (15%)</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($productos); $i++): ?>
                                    <tr>
                                        <td><?php echo $productos[$i]; ?></td>
                                        <td><?php echo $categorias[$i]; ?></td>
                                        <td>$<?php echo number_format($precios[$i], 2); ?></td>
                                        <td><?php echo $cantidades[$i]; ?></td>
                                        <td>$<?php echo number_format($detallesProductos[$i]['subtotal'], 2); ?></td>
                                        <td>
                                            <?php if ($aplicarIva[$i]): ?>
                                                $<?php echo number_format($detallesProductos[$i]['iva'], 2); ?>
                                            <?php else: ?>
                                                $0.00
                                            <?php endif; ?>
                                        </td>
                                        <td>$<?php echo number_format($detallesProductos[$i]['total'], 2); ?></td>
                                    </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                        
                     
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="card">
                                    <div class="card-header bg-info text-white">
                                        <h5 class="mb-0">Totales</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <strong>Subtotal General:</strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                $<?php echo number_format($subtotalGeneral, 2); ?>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <strong>Total IVA:</strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                $<?php echo number_format($totalIvaGeneral, 2); ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <strong>Total a Pagar:</strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                <strong class="text-success">$<?php echo number_format($totalGeneral, 2); ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <a href="index.php" class="btn btn-primary">Nueva Factura</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
} else {
   
    header("Location: index.php");
    exit();
}
?>