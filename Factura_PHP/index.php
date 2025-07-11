<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
         PHP - FACTURACIÓN
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Sistema de Facturación Lili Lesano</h3>
                    </div>
                    <div class="card-body">
                        <form action="procesar.php" method="POST">
                            
                            
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h4 class="text-primary">Estimado cliente ingresa tus datos para generar tu factura</h4>
                                    <hr>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="txt_nombre" class="form-label">Nombre del Cliente</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="txt_nombre" 
                                    name="txt_nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="txt_email" class="form-label">Correo Electrónico</label>
                                    <input 
                                    type="email" 
                                    class="form-control" 
                                    id="txt_email" 
                                    name="txt_email" required>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="txt_fecha" class="form-label">Fecha</label>
                                    <input 
                                    type="date" 
                                    class="form-control" 
                                    id="txt_fecha" 
                                    name="txt_fecha" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="txt_comentarios" class="form-label">Comentarios</label>
                                    <textarea class="form-control" id="txt_comentarios" name="txt_comentarios" rows="3"></textarea>
                                </div>
                            </div>
                            
                            
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h4 class="text-primary">Productos</h4>
                                    <hr>
                                </div>
                            </div>
                            
                            
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h5 class="text-secondary">Producto 1</h5>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="txt_producto1" class="form-label">Nombre del Producto</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="txt_producto1" 
                                    name="txt_producto1" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="txt_precio1" class="form-label">Precio</label>
                                    <input 
                                    type="number" 
                                    class="form-control" 
                                    id="txt_precio1" 
                                    name="txt_precio1" 
                                    step="0.01"
                                     min="0" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="txt_cantidad1" class="form-label">Cantidad</label>
                                    <input 
                                    type="number" 
                                    class="form-control" 
                                    id="txt_cantidad1" 
                                    name="txt_cantidad1" 
                                    min="1" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="select_categoria1" class="form-label">Categoría</label>
                                    <select class="form-select" id="select_categoria1" name="select_categoria1" required>
                                        <option value="">Seleccione la categoría</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Automotriz">Automotriz</option>
                                        <option value="Alimentos">Alimentos</option>
                                        <option value="Libros">Libros</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label for="chk_iva1" class="form-label">IVA</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chk_iva1" name="chk_iva1" value="1">
                                        <label class="form-check-label" for="chk_iva1">15%</label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Producto 2 -->
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h5 class="text-secondary">Producto 2</h5>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="txt_producto2" class="form-label">Nombre del Producto</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="txt_producto2" 
                                    name="txt_producto2" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="txt_precio2" class="form-label">Precio</label>
                                    <input 
                                    type="number" 
                                    class="form-control" 
                                    id="txt_precio2" 
                                    name="txt_precio2" 
                                    step="0.01" 
                                    min="0" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="txt_cantidad2" class="form-label">Cantidad</label>
                                    <input 
                                    type="number" 
                                    class="form-control" 
                                    id="txt_cantidad2" 
                                    name="txt_cantidad2" 
                                    min="1" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="select_categoria2" class="form-label">Categoría</label>
                                    <select class="form-select" id="select_categoria2" name="select_categoria2" required>
                                        <option value="">Seleccione la categoría</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Automotriz">Automotriz</option>
                                        <option value="Alimentos">Alimentos</option>
                                        <option value="Libros">Libros</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label for="chk_iva2" class="form-label">IVA</label>
                                    <div class="form-check">
                                        <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        id="chk_iva2" 
                                        name="chk_iva2" 
                                        value="1">
                                        <label class="form-check-label" for="chk_iva2">15%</label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h5 class="text-secondary">Producto 3</h5>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="txt_producto3" class="form-label">Nombre del Producto</label>
                                    <input type="text" class="form-control" id="txt_producto3" name="txt_producto3" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="txt_precio3" class="form-label">Precio</label>
                                    <input 
                                    type="number" 
                                    class="form-control" 
                                    id="txt_precio3" 
                                    name="txt_precio3" 
                                    step="0.01" 
                                    min="0" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="txt_cantidad3" class="form-label">Cantidad</label>
                                    <input 
                                    type="number" 
                                    class="form-control" 
                                    id="txt_cantidad3" 
                                    name="txt_cantidad3" 
                                    min="1" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="select_categoria3" class="form-label">Categoría</label>
                                    <select class="form-select" id="select_categoria3" name="select_categoria3" required>
                                        <option value="">Seleccione la categoría</option>
                                        <option value="Servicios">Servicios</option>
                                        <option value="Automotriz">Automotriz</option>
                                        <option value="Alimentos">Alimentos</option>
                                        <option value="Libros">Libros</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label for="chk_iva3" class="form-label">IVA</label>
                                    <div class="form-check">
                                        <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        id="chk_iva3" 
                                        name="chk_iva3" 
                                        value="1">
                                        <label class="form-check-label" for="chk_iva3">15%</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <button 
                                    type="submit" 
                                    class="btn btn-primary btn-lg">PROCESAR FACTURA</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>