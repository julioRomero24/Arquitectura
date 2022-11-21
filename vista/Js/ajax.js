$(document).ready(function(){
    mostrarPublicaciones()
})

function mostrarPublicaciones(){
    $.ajax({
        url:"../controlador/accion/ajax_mostrarPublicacion.php",
        success: function(result){
            insertarPublicaciones(JSON.parse(result))
            //console.log(JSON.parse(result))
        },
        error:function(xhr){
            alert("ocurrio un error: "+xhr.status+" "+xhr.statusText);
            console.log("Error")
        }
    });
}

function insertarPublicaciones(result){
    let publicacion = ''
    
    $.each(result, function(i) {
     
        publicacion +='<div class="row">'+
        '<div class="col-md-2">'+
            '<img src="https://bootdey.com/img/Content/user_3.jpg" class="img-responsive  img-circle">'+
        '</div>'+
        '<div class="col-md-10">'+
            '<div class="row post">'+
              '<div class="col-md-12">'+
                '<p id="ponerPublicacion">'+result[i].contenido+'</p>'+
                '<a data-placement="top" class="btn btn-success btn-xs glyphicon glyphicon-ok tip" href="#" title="View"></a>'+
                '<a data-placement="top" class="btn btn-danger  btn-xs glyphicon glyphicon-trash tip" href="#" title="Delete"></a>'+
                '<a data-placement="top" class="btn btn-info  btn-xs glyphicon glyphicon-share tip" href="#" title="Share"></a>'+
              '</div>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<hr>'
            
    })

    $("#contenedorPost").append(publicacion)

}
function publicar(){
    let contenido=$('#textoPublicacion').val();
    let materia=$('#materia').val();
    let tema=$('#tema').val();
    let codigoUsuario=$("#codigoEstudiante").text();
    $.ajax({
        type: "POST",
        data: { "contenido" : contenido,
        "materia" : materia, 
        "tema" : tema,
        "idCodigo": codigoUsuario
       },
        url: "../controlador/accion/ajax_publicar.php",
        success: function(respuesta){
            console.log(respuesta);
            if(respuesta==1)
                alert("Publicado")
            else
                alert ("Error")
        }
    })
}