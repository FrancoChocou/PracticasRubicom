<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC - Ejercicio 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style_imc.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h2 class="text-center">Calculadora de Índice de Masa Corporal (IMC)</h2>
                    </div>
                    <div class="card-body">
                        <form id="imcForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="peso" class="form-label">Peso (kg):</label>
                                        <input type="number" class="form-control" id="peso" step="0.1" min="0" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="altura" class="form-label">Altura (metros):</label>
                                        <input type="number" class="form-control" id="altura" step="0.01" min="0" required>
                                        <div class="form-text">Ejemplo: 1.75 para 1 metro 75 cm</div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Calcular IMC</button>
                        </form>
                        
                        <div id="resultadoIMC" class="mt-4" style="display: none;">
                            <h4 class="text-center">Resultado:</h4>
                            <div class="alert alert-info">
                                <p><strong>Tu IMC es:</strong> <span id="imcValor">0</span></p>
                                <p><strong>Clasificación:</strong> <span id="imcClasificacion">-</span></p>
                            </div>
                            
                            <!-- Representación visual del IMC -->
                            <div class="mt-4">
                                <h5 class="text-center">Escala de IMC:</h5>
                                <div class="progress escala-imc" style="height: 35px;">
                                    <div class="progress-bar bg-info" style="width: 18.5%">Bajo peso</div>
                                    <div class="progress-bar bg-success" style="width: 24%">Normal</div>
                                    <div class="progress-bar bg-warning" style="width: 29%">Sobrepeso</div>
                                    <div class="progress-bar bg-danger" style="width: 28.5%">Obesidad</div>
                                </div>
                                <div class="mt-2 text-center">
                                    <small class="text-muted">← Bajo peso (≤18.5) | Normal (18.5-24.9) | Sobrepeso (25-29.9) | Obesidad (≥30) →</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script_imc.js"></script>
</body>
</html>