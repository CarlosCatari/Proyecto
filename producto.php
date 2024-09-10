<!-- rojo #d7263d blanco #fff8e8  amarillo #ffd500  naranja #ff7f11 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #fff8e8;">
    <nav class="navbar navbar-expand-lg mb-2" style="background-color: #ff7f11;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Marcador1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Marcador2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Marcador3</a></li>
                    <li class="nav-item ms-3"><a class="nav-link" href="loguin.php">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container d-flex p-4" style="background-color: #ffefe1;">
            <div class="col-6 p-2" style="border:solid #ff7f11;">
                <label for="formFileLg" class="form-label">Imagen de Producto</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file">
            </div>
            <div class="col-6 m-3">
                <div class="mb-4"
                    <label for="producto" class="form-label">Producto:</label>
                    <input class="form-control" name="producto" type="producto" id="producto" placeholder="Titulo Producto" required>
                </div>
                <div class="mb-2"
                    <label for="precio" class="form-label">Precio:</label>
                    <input class="form-control" name="precio" type="precio" id="precio" placeholder="Precio en soles" required>
                </div>
                <button type="submit" class="btn btn-danger mt-3">Agregar Producto</button>
            </div>
        </div>

        <div class="container d-flex mt-4" style="background-color: #ffefe1;">
            <div class="col-6 p-3 m-2">
                <div class="mb-2"
                    <label for="categoria" class="form-label">Categoria:</label>
                    <input class="form-control" name="categoria" type="categoria" id="categoria" placeholder="Categoria o Tipo" required>
                </div>
                <div class="mb-2"
                    <label for="marca" class="form-label">Marca:</label>
                    <input class="form-control" name="marca" type="marca" id="marca" placeholder="Marca" required>
                </div>
                <div class="mb-2"
                    <label for="contenido" class="form-label">Contenido:</label>
                    <input class="form-control" name="contenido" type="contenido" id="contenido" placeholder="Contenido" required>
                </div>
            </div>
            <div class="col-6 pe-3">
                <div class="mb-2 mt-2">
                    <label for="descripcion" class="form-label">Descripcion:</label>
                    <textarea class="form-control" id="descripcion" rows="8"></textarea>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>