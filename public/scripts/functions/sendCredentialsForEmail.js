let identification = document.getElementById('identification');
let sendButton = document.getElementById('sendButton');

//  Activar o desactivar el botón dependiendo de los datos ingresados
identification.addEventListener('keydown', (e) => {    
    let key = e.keyCode || e.charCode;
    if(key == 8 || e.target.value.length <= 6){
        sendButton.classList.remove('btn-primary');
        sendButton.classList.add('btn-outline-primary');
        sendButton.setAttribute('disabled', true);
    }else if(e.target.value >= 8 && (key >= 48 && key <= 57)){
        sendButton.classList.remove('btn-outline-primary');
        sendButton.classList.add('btn-primary');
        sendButton.removeAttribute('disabled');
    }
});

identification.addEventListener('focusout', (e) => {
    let key = e.keyCode || e.charCode;
    if(e.target.value.length >= 8){
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
});

const sendCredentialsForEmail = async() => {
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    await fetch('api/send-credentials-for-email', {
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
    .then((response) => {
        return response.json();
    })
    .then((response) => {
        console.log(response);
    })
    .catch((error) => {
        console.log("ERROR: ",error);
    })
}