
function mostraCampoParaEmpresa() {
    
    const tipo_usuario = document.getElementById('tipo_usuario');
    const empresa = document.getElementById('empresa');
    const estudante = document.getElementById('estudante');

    empresa.style.display = 'none';
    estudante.style.display = 'none';

    switch(tipo_usuario.value) {
        case "empresa":
            empresa.style.display = 'block';
            break;
        case "estudante":
            estudante.style.display = 'block';
            break;
        default:
            break; 
    }
}




