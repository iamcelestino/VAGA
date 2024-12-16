
function mostraCampoParaEmpresa() {

    const tipo_usuario = document.getElementById('tipo_usuario');
    
    switch(tipo_usuario.value) {
        case "empresa":
            console.log('empresa');
        case "estudante":
            console.log('estudante');
        case "escola":
            console.log('escola');
        default:
            console.log('this is not working');
    }

}

mostraCampoParaEmpresa();




