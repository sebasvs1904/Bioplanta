/*nuevo validaciones*/

function valpro(){
    var can;
    
    can=document.getElementById("cantidad").value;
  
    if(can>=1){
        return true;
    }else{
          alert(" No has seleccionado ningun articulo.");
          return false;
          }
}

function valProduct(){
    var nombre, cantidad, descripcion, foto, precio, categoria;
    
    nombre=document.getElementById("nombre").value;
    cantidad=document.getElementById("cant").value;
    descripcion=document.getElementById("desc").value;
    foto=document.getElementById("foto").value;
    precio=document.getElementById("precio").value;
    categoria=document.getElementById("categ").value;
    
    if(nombre==="" || cantidad==0 || descripcion==="" || foto==="" || precio==0 || categoria===""){
        alert ("Todos los campos son obligatorios. Falta llenar un(s) campo(s).");
        return false;
    }else if(nombre.length>20){
        alert("El nombre es demasiado largo.");
        return false;
    }else if(descripcion.length>300){
        alert("La descripcion es demasiado larga.");
        return false;
    }else if(cantidad<0 || precio<0){
        alert("No son validos numeros negativos"); 
        return false;
    }else if(categoria=="Ofertas" || categoria=="Flores" || categoria=="Cactus" || categoria=="Orquideas" || categoria=="De sombra" || categoria=="Jardineria"){
        return true;}
        else{
            alert("La categoria no es la correcta [Solo las opciones presentadas].");
        return false;}   
    
}