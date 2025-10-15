<?php 
/*
 * Este es el archivo que procesa las conversiones de moneda.
 * 
 * Los parámetros que se envían en la llamada a este script son:
 * - monto: cantidad a convertir
 * - moneda_origen: moneda desde la cual se convierte
 * - moneda_destino: moneda a la cual se convierte
 * 
 * Las entradas son sanitizadas y validadas antes de procesarse.
 */

header('Content-Type: application/json');

// Sanitizar entradas
$monto = floatval($_REQUEST["monto"] ?? 0);
$monedaOrigen = trim($_REQUEST["moneda_origen"] ?? '');
$monedaDestino = trim($_REQUEST["moneda_destino"] ?? '');

// Tasas de cambio (respecto al USD como moneda base)
$tasas = [
    'USD' => 1,
    'EUR' => 0.92,
    'GBP' => 0.79,
    'JPY' => 149.50,
    'ARS' => 350.00,
    'BRL' => 4.98,
    'MXN' => 17.15
];

// Validaciones
if ($monto <= 0) {
    echo json_encode([
        'error' => true,
        'mensaje' => 'Por favor ingrese un monto válido mayor a 0'
    ]);
    exit;
}

if (!isset($tasas[$monedaOrigen]) || !isset($tasas[$monedaDestino])) {
    echo json_encode([
        'error' => true,
        'mensaje' => 'Por favor seleccione monedas válidas'
    ]);
    exit;
}

if ($monedaOrigen === $monedaDestino) {
    echo json_encode([
        'error' => true,
        'mensaje' => 'Las monedas de origen y destino deben ser diferentes'
    ]);
    exit;
}

// Realizar la conversión
// Convertir primero a USD (moneda base) y luego a la moneda destino
$montoEnUSD = $monto / $tasas[$monedaOrigen];
$montoConvertido = $montoEnUSD * $tasas[$monedaDestino];
$tasaCambio = $tasas[$monedaDestino] / $tasas[$monedaOrigen];

// Retornar resultado en formato JSON
echo json_encode([
    'error' => false,
    'monto_original' => $monto,
    'moneda_origen' => $monedaOrigen,
    'monto_convertido' => round($montoConvertido, 2),
    'moneda_destino' => $monedaDestino,
    'tasa_cambio' => round($tasaCambio, 4)
]);
?>