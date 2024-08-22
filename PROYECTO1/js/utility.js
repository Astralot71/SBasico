function validarNumeros(event) {
    const valor = event.target.value;
    // Elimina cualquier carácter que no sea un dígito
    event.target.value = valor.replace(/[^0-9]/g, '');
}
function ValidarDni(valor, ) {
    // Limita el número de caracteres 
    return valor.slice(0, 8);
}