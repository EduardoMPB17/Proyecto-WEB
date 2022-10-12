function validacion() {//la funcion llama los id del html
    var variable_nombre,variable_correo,variable_edad;
    variable_nombre = document.getElementById("nombre").value;//id nombre del formulario
    variable_correo = document.getElementById("correo").value;//id correo
    variable_edad = document.getElementById("edad").value;//id edad


    if(variable_nombre === "" || variable_correo === "" || variable_edad === ""){//se usa una condicional 
        alert("Los campos son OBLIGATORIOS!");//para ver si el campo esta vacio 
        return false;//si es asi da una alerta en el navegador
    }
}


// función que obtiene valores de los inputs(por medio de los id) y los muestra por pantalla
function extraeDatos() {
    let name=document.getElementById("nombre").value;//id nombre
    let mail=document.getElementById("correo").value;//id correo
    let age=document.getElementById("edad").value;//id edad
    let msg=document.getElementById("msg").value;
    
    alert("Tu nombre es: " + name + "\nTu correo es: " + mail + "\nTienes: " + age + " años \ny tu sugerencia fue: " + msg)//manda el mensaje

}     
    

window.addEventListener('load', iniciar, false);//manejador de eventos

function iniciar() {//funcion de accion del mouese en la imagen del formulario

    var imagen = document.getElementById('imagen'); //id imagen DE IMG  
    imagen.addEventListener('mouseover', cambia, false);//manejador de eventos
    imagen.addEventListener('mouseout', restaurar, false);
}

function restaurar(){//cuando el mouse deja la imagen
    var imagen = document.getElementById('imagen').src = "/img/fomr1.jpg";
}

function cambia() {//cunado el mouse pasa por la imagen
    var imagen = document.getElementById('imagen').src = "/img/form2.jpg";
}



//==============================================================================================




