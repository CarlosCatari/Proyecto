<!--Se omite los atributos Tiempo_vida, Descuento , nro_veces_compra, dinero_gastado, _estado_cuenta -->
<?php
    error_reporting(0);
    $nombre_uno =  $_POST['nombre_uno'];
    $nombre_dos =  $_POST['nombre_dos'];
    $ap_pat =  $_POST['ap_pat'];
    $ap_mat =  $_POST['ap_mat'];
    $dni =  $_POST['dni'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-dark">
    <div class="container bg-white p-5 rounded-5 text-secondary">
        <div class="h4 mb-4">Registro de Cliente Recurrente</div>
        <form action="#" method="post">
            <div class="row mb-4">
                <div class="col col-12 col-md-6">
                    <label class="form-label" for="nombre_uno">Primer Nombre:</label>
                    <input class="form-control" type="text" name="nombre_uno" id="nombre_uno" placeholder="Ingrese primer nombre" pattern="[a-zA-Z\s]+"  required>
                </div>
                <div class="col col-12 col-md-6">
                    <label class="form-label" for="nombre_dos">Segundo Nombre</label>
                    <input class="form-control" type="text" name="nombre_dos" id="nombre_dos" placeholder="Ingrese segundo nombre" pattern="[a-zA-Z\s]+">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col col-12 col-md-6">
                    <label class="form-label" for="ap_pat">Apellido Paterno</label>
                    <input class="form-control" type="text" name="ap_pat" id="ap_pat" placeholder="Ingrese apellido paterno" pattern="[a-zA-Z\s]+"  required>
                </div>
                <div class="col col-12 col-md-6">
                    <label class="form-label" for="ap_mat">Apellido Materno</label>
                    <input class="form-control" type="text" name="ap_mat" id="ap_mat" placeholder="Ingrese apellido materno" pattern="[a-zA-Z\s]+"  required>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col col-12 col-md-6">
                    <label class="form-label" for="dni">DNI</label>
                    <input class="form-control" type="text" name="dni" id="dni" placeholder="Nº de documento" maxlength="8" minlength="7" pattern="[0-9]{8}" required>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center mb-3">
                <button type="submit" class="btn btn-primary text-white w-100 mt-4 ms-4 me-3">Registrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>