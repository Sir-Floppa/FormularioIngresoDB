function validar() {
    let form = document.forms['inputForm'];

    let validId = form['id'].value != '';
    let validName = form['nombre'].value != '';
    let validType = form['tipo'].value != '';
    let validCode = form['codigoEdicion'].value != '';
    let validRarity = form['rareza'].value != '';
    let validCantidad = form['cantidad'].value != ''; 

    let valid = validId && validName && validType && validCode && validRarity && validCantidad;

    if(!valid) {
        alert('Debe llenar todos los campos');
    }
    else {
        alert('Registro ingresado con exito');
    }

    return valid;
}