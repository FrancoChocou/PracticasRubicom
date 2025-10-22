<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Propinas - Ejercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style_propina.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Calculadora de Propinas</h2>
                    </div>
                    <div class="card-body">
                        <form id="propinaForm">
                            <div class="mb-3">
                                <label for="montoCuenta" class="form-label">Monto total de la cuenta ($):</label>
                                <input type="number" class="form-control" id="montoCuenta" step="0.01" min="0" required>
                            </div>
                            <div class="mb-3">
                                <label for="porcentajePropina" class="form-label">Porcentaje de propina (%):</label>
                                <input type="number" class="form-control" id="porcentajePropina" min="0" max="100" value="15" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Calcular Propina</button>
                        </form>
                        
                        <div id="resultadoPropina" class="mt-4" style="display: none;">
                            <h4 class="text-center">Resultado:</h4>
                            <div class="alert alert-info">
                                <p><strong>Propina:</strong> $<span id="propinaMonto">0</span></p>
                                <p><strong>Total a pagar:</strong> $<span id="totalPagar">0</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script_propina.js"></script>
</body>
</html>