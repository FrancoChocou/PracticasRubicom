<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conversor de Monedas</title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="recursos/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="recursos/bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="recursos/jquery/jquery.min.js"></script>
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column align-items-center justify-content-start vh-100">
        <header>
            <div class="m-2">
                <a href=".">
                    <img src="img/icon.png" width="40" alt="">
                </a>
            </div>
            <div class="flex-grow-1">
                <span>Conversor de Monedas</span>
            </div>
        </header>
        <div id="pantalla-principal" class="container mt-4">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <label for="campo-monto" class="form-label">Monto a convertir</label>
                    <input type="number" id="campo-monto" class="form-control" step="0.01" min="0.01" placeholder="Ingrese el monto">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <label for="campo-moneda-origen" class="form-label">Moneda de origen</label>
                    <select id="campo-moneda-origen" class="form-select">
                        <option value="">Seleccionar...</option>
                        <option value="USD">USD - Dólar Estadounidense</option>
                        <option value="EUR">EUR - Euro</option>
                        <option value="GBP">GBP - Libra Esterlina</option>
                        <option value="JPY">JPY - Yen Japonés</option>
                        <option value="ARS">ARS - Peso Argentino</option>
                        <option value="BRL">BRL - Real Brasileño</option>
                        <option value="MXN">MXN - Peso Mexicano</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <label for="campo-moneda-destino" class="form-label">Moneda de destino</label>
                    <select id="campo-moneda-destino" class="form-select">
                        <option value="">Seleccionar...</option>
                        <option value="USD">USD - Dólar Estadounidense</option>
                        <option value="EUR">EUR - Euro</option>
                        <option value="GBP">GBP - Libra Esterlina</option>
                        <option value="JPY">JPY - Yen Japonés</option>
                        <option value="ARS">ARS - Peso Argentino</option>
                        <option value="BRL">BRL - Real Brasileño</option>
                        <option value="MXN">MXN - Peso Mexicano</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <div id="resultado-container" class="alert alert-info d-none">
                        <h5 class="mb-3">Resultado de la Conversión</h5>
                        <div class="d-flex justify-content-around align-items-center flex-wrap">
                            <div class="text-center">
                                <small class="d-block text-muted">Monto Original</small>
                                <strong id="monto-original" class="fs-4"></strong>
                            </div>
                            <div class="fs-3">→</div>
                            <div class="text-center">
                                <small class="d-block text-muted">Monto Convertido</small>
                                <strong id="monto-convertido" class="fs-4 text-primary"></strong>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <small id="tasa-cambio" class="text-muted"></small>
                        </div>
                    </div>
                    <div id="error-container" class="alert alert-danger d-none"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" id="boton-convertir" class="btn btn-primary w-100">Convertir</a>
                </div>
            </div>
        </div>
        <script src="recursos/bootstrap/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>