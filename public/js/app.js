$(document).ready(()=>{
    
    function getCarnet(lenght,min,max){
        var numeros = "0123456789";
        var clave = '';
        for(let i = 0; i<lenght; i++){
            clave += Math.round(Math.random() * (max - min) + min);
        }
        return clave;
    }
    var clave = getCarnet(5,0,9);
    $('#apellidos').on('keyup',function(event){
        var apellido = $('#apellidos').val();
        var busquedad = apellido.split(' ');
        $("#carnet").val(clave)
        $('#viewCarnet').text(clave)
        var charFirst = busquedad[0].charAt(0);
        $("#carnet").val(charFirst + clave)
        $('#viewCarnet').text(charFirst + clave)
        var charSecond = busquedad[1].charAt(0);
        //Carnet generador del value
        $("#carnet").val(charFirst + charSecond + clave)
        $('#viewCarnet').text(charFirst + charSecond + clave)        
    })
    
})