$(document).ready(function() {
    // Evento click en el botón de convertir
    $("#boton-convertir").on("click", function(e) {
        e.preventDefault();
        
        // Obtener valores de los campos
        var monto = $("#campo-monto").val();
        var monedaOrigen = $("#campo-moneda-origen").val();
        var monedaDestino = $("#campo-moneda-destino").val();
        
        // Validación básica en el cliente
        if (!monto || monto <= 0) {
            mostrarError("Por favor ingrese un monto válido");
            return;
        }
        
        if (!monedaOrigen || !monedaDestino) {
            mostrarError("Por favor seleccione ambas monedas");
            return;
        }
        
        // Ocultar mensajes previos
        $("#resultado-container").addClass("d-none");
        $("#error-container").addClass("d-none");
        
        // Realizar la petición AJAX
        $.ajax({
            url: "calcular.php",
            type: "GET",
            data: {
                monto: monto,
                moneda_origen: monedaOrigen,
                moneda_destino: monedaDestino
            },
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    mostrarError(response.mensaje);
                } else {
                    mostrarResultado(response);
                }
            },
            error: function() {
                mostrarError("Ocurrió un error al procesar la conversión");
            }
        });
    });
    
    // Función para mostrar el resultado
    function mostrarResultado(data) {
        $("#error-container").addClass("d-none");
        
        // Formatear números con separadores de miles
        var montoOriginalFormateado = formatearNumero(data.monto_original);
        var montoConvertidoFormateado = formatearNumero(data.monto_convertido);
        
        // Mostrar los datos en el contenedor de resultado
        $("#monto-original").text(data.moneda_origen + " " + montoOriginalFormateado);
        $("#monto-convertido").text(data.moneda_destino + " " + montoConvertidoFormateado);
        $("#tasa-cambio").text("Tasa de cambio: 1 " + data.moneda_origen + " = " + 
                              data.tasa_cambio + " " + data.moneda_destino);
        
        $("#resultado-container").removeClass("d-none");
    }
    
    // Función para mostrar errores
    function mostrarError(mensaje) {
        $("#resultado-container").addClass("d-none");
        $("#error-container").text(mensaje).removeClass("d-none");
    }
    
    // Función para formatear números con separadores de miles
    function formatearNumero(numero) {
        return parseFloat(numero).toLocaleString('es-AR', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }
});
