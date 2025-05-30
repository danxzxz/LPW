function validarCampos() {

    var titulo = document.getElementById('titulo').value;
    var autor = document.getElementById('autor').value;
    var genero = document.getElementById('genero').value;
    var paginas = document.getElementById('qtd_paginas').value;
    // alert(titulo +'-' +autor +'-'+ genero +'-'+ paginas);

    erros = [];
    if (titulo == '')
        erros.push('informe o titulo');
    if (genero == '')
        erros.push('informe o genero');
    if (paginas == '')
        erros.push('informe o numero de paginas');
    if (autor == '')
        erros.push('informe o autor');

    var divErro = document.getElementById('mensagem-erro');

    if (erros.length > 0) {
        divErro.innerHTML = erros.join('<br>');
        return false;
    }
 
    return true;
 }