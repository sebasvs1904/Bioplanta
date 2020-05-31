
$("#formCheckPassword").validate({
           rules: {
               password: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   cfmPassword: { 
                    equalTo: "#password",
                     minlength: 6,
                     maxlength: 10
               }


           },
     messages:{
         password: { 
                 required:"Password Requerido",
                 minlength: "Minimo 6 caracteres",
                 maxlength: "Maximo 10 caracteres"
               },
       cfmPassword: { 
         equalTo: "El password debe ser igual al anterior",
         minlength: "Minimo 6 caracteres",
         maxlength: "Maximo 10 caracteres"
       }
     }

});




function validaFechaMenor(campo){
		var bRet = false;
		var dHoy = new Date();
		var dCapt = null;
		if (campo.value == "")
			alert("Faltan datos");
		else{
			dCapt = validaFecha(campo.value);
			if (dCapt != null && dCapt < dHoy)
				bRet = true;
			else{
				alert("La fecha debe ser menor a la fecha actual");
                bRet = false;}
		}
		return bRet;
	}



       
function crearInput(){
    var x = document.createElement('input');
    x.setAttribute("type","file");
    x.setAttribute("name","Foto");
    
    document.body.appendChild(x);
}   