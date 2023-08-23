
function validar(){
     var resp=true;

    var usuario= document.getElementById("nombre");
    var clave= document.getElementById("clave");
    let divError= document.getElementById("divError");

    var eRcontra=/[A-Za-z0-9]\S{8}$/;
    
    //verificar que el usuario no este vacio
    if (usuario.value ==""){
        usuario.style.borderColor= "#FF0000"; 
        divError.insertAdjacentHTML('beforeend','<p>Ingrese un usuario</p>')
      
        resp=false;
    }
    if(!eRcontra.test(clave.value) || clave.value =="" ){
        clave.style.borderColor= "#FF0000"; 
        divError.insertAdjacentHTML('beforeend','<p>La clave debe contener minimo 8 caracter, letras y numeros</p>')
        resp=false;
    } 
    if(clave.value == usuario.value){
        clave.style.borderColor= "#FF0000"; 
        divError.insertAdjacentHTML('beforeend','<p>La clave no puede ser igual al usuario.</p>')
        resp=false;
    } 
    return resp;
}
