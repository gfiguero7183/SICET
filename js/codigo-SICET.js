// JavaScript Document
//SICET

function validarnumeros(e){ // Solo permite numero en las cajas de texto
    "use strict";
    var key=e.keyCode || e.which;
    var teclado=String.fromCharCode(key);
    var numeros="0123456789";
    var especiales="8-9-37-39-46";
    var tecla_especial=false;

    for(var i in especiales){
        if(key===especiales[i]){
            tecla_especial=true;
        }
    }

    if(numeros.indexOf(teclado)===-1 && !tecla_especial){
        return false;
    }
}