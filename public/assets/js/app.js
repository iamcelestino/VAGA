
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


//barra de Navegação
const menu = document.getElementById('burger-menu');
const mobile_menu = document.getElementById('mobileMenu');

function showMenu() {
    mobile_menu.classList.add("show");
}

function hideMneu(event) {
     mobile_menu.classList.remove("show");
     mobile_menu.stopPropagation()
}

menu.addEventListener("click", showMenu);
mobile_menu.addEventListener("click", hideMneu);






