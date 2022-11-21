$(document).ready(function(){
    mostrarPublicaciones()
})
function mostrarPublicaciones(){
    $.ajax({
        url:"../controlador/accion/ajax_mostrarPublicacion.php",
        sucess:function(result){
            //insertarPublicaciones(JSON.parse(result))
            console.log(result)
        },
        error:function(xhr){
            alert("ocurrio un error: "+xhr.status+" "+xhr.statusText);
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

    $("#contenedorPost").innerHTML=publicacion

}
function ajax(){
    const http=new XMLHttpRequest();
    const url ='http://127.0.0.1:5500/vista/principalUsuario.html';

    http.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            console.log(this.responsiveText);
            $('#textoPublicacion').text('');
            document.getElementById("response").innerHTML=this.responseText;
        }
    }

    http.open("GET",url);
    http.send();
}
document.getElementById("Bpublicar").addEventListener("click",function(){
    ajax();
});