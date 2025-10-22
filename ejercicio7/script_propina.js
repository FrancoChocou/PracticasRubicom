document.getElementById('propinaForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const montoCuenta = parseFloat(document.getElementById('montoCuenta').value);
    const porcentajePropina = parseFloat(document.getElementById('porcentajePropina').value);
    
    if (isNaN(montoCuenta) || isNaN(porcentajePropina) || montoCuenta <= 0) {
        alert('Por favor, ingresa valores válidos.');
        return;
    }
    
    // Calcular propina y total
    const propina = (montoCuenta * porcentajePropina) / 100;
    const totalPagar = montoCuenta + propina;
    
    // Mostrar resultados
    document.getElementById('propinaMonto').textContent = propina.toFixed(2);
    document.getElementById('totalPagar').textContent = totalPagar.toFixed(2);
    document.getElementById('resultadoPropina').style.display = 'block';
});

// Validación en tiempo real
document.querySelectorAll('input[type="number"]').forEach(input => {
    input.addEventListener('input', function() {
        if (this.value < 0) {
            this.value = 0;
        }
    });
});