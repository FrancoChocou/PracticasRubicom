document.getElementById('imcForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const peso = parseFloat(document.getElementById('peso').value);
    const altura = parseFloat(document.getElementById('altura').value);
    
    if (isNaN(peso) || isNaN(altura) || altura === 0 || peso === 0) {
        alert('Por favor, ingresa valores válidos.');
        return;
    }
    
    if (altura > 3) {
        alert('¿Estás seguro de la altura? Recuerda usar metros (ej: 1.75) no centímetros.');
        return;
    }
    
    // Calcular IMC
    const imc = peso / (altura * altura);
    
    // Determinar clasificación
    let clasificacion = '';
    let claseColor = '';
    
    if (imc < 18.5) {
        clasificacion = 'Bajo peso';
        claseColor = 'imc-bajo-peso';
    } else if (imc >= 18.5 && imc <= 24.9) {
        clasificacion = 'Peso normal';
        claseColor = 'imc-normal';
    } else if (imc >= 25 && imc <= 29.9) {
        clasificacion = 'Sobrepeso';
        claseColor = 'imc-sobrepeso';
    } else {
        clasificacion = 'Obesidad';
        claseColor = 'imc-obesidad';
    }
    
    // Mostrar resultados
    document.getElementById('imcValor').textContent = imc.toFixed(2);
    document.getElementById('imcClasificacion').textContent = clasificacion;
    document.getElementById('imcClasificacion').className = claseColor;
    document.getElementById('resultadoIMC').style.display = 'block';
});

// Validación en tiempo real
document.querySelectorAll('input[type="number"]').forEach(input => {
    input.addEventListener('input', function() {
        if (this.value < 0) {
            this.value = 0;
        }
    });
});