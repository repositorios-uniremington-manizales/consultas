let sendButton = document.getElementById('sendButton');

function activateOrInactivateButton(){
    //  Activar o desactivar el botón dependiendo de los datos ingresados
    let identification = document.getElementById('identification').value;
    console.log(identification.length + 1);
    if ((identification.length + 1) >= 6){
        sendButton.classList.remove('btn-outline-primary');
        sendButton.classList.add('btn-primary');
        sendButton.removeAttribute('disabled');
    }else{
        sendButton.classList.remove('btn-primary');
        sendButton.classList.add('btn-outline-primary');
        sendButton.setAttribute('disabled', true);
    }
}

identification.addEventListener('focusout', (e) => {
    let key = e.keyCode || e.charCode;
    
    if(e.target.value.length >= 6){
        sendButton.classList.remove('btn-outline-primary');
        sendButton.classList.add('btn-primary');
        sendButton.removeAttribute('disabled');
    }else{
        sendButton.classList.remove('btn-primary');
        sendButton.classList.add('btn-outline-primary');
        sendButton.setAttribute('disabled', true);
    }
});

//  Evitar que en el campo input se copien o peguen elementos
addEventListener('DOMContentLoaded', () => {
    identification.onpaste = (e) => {
        e.preventDefault();
    }
    identification.oncopy = (e) => {
        e.preventDefault();
    }
});

//  Enviar la identificación del usuario al controlador
sendButton.addEventListener('click', (e) => {
    e.preventDefault();
    sendCredentialsForEmail();
    e.target.innerHTML = 'Enviando email...';
    e.target.setAttribute('disabled', true);
});

const sendCredentialsForEmail = async() => {
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    fetch('api/send-credentials-for-email', {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        credentials: "same-origin",
        body: JSON.stringify({
            identification: identification.value
        })
    })    
    .then(async (res) => {

        const response = await res.json();

        console.log(response);        

        sendButton.innerHTML = 'Obtener credenciales';
        sendButton.classList.remove('btn-primary');
        sendButton.classList.add('btn-outline-primary');
        identification.value = '';

        if (response != 'error'){
            Swal.fire({
                title: '¡Perfecto!',
                html: 'Hemos enviado un correo a la dirección: <strong>' + response +'</strong>', 
                icon: 'success'
            })            
        }else{
            Swal.fire({                
                html: '<h4><strong>No hemos encontrado registros</strong></h4><br><br>Por favor, comunícate con el área de Tecnologías de la Información y las Comunicaciones de la sede:<br><br><strong>alejandro.acevedo@uniremington.edu.co</strong><br>885 2121 Ext. 113<br>O comunícate a través del <strong>Chat en Línea</strong>',
                icon: 'question'
            })
        }        
    })
    .catch((error) => {
    })
}