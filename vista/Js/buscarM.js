/*$(document).ready(function(){
    mostrarPublicaciones()
})*/

function mostrarMonitores(){
    let materia=$("#iBusqueda").val();
    $.ajax({
        type: "POST",
        data: { "materia" : materia
        },
        url:"../controlador/accion/ajax_mostrarMonitores.php",
        success: function(result){
            insertarMonitores(JSON.parse(result))

            console.log(JSON.parse(result))
        },
        error:function(xhr){
            alert("ocurrio un error: "+xhr.status+" "+xhr.statusText);
            console.log("Error")
        }
    });
}

function insertarMonitores(result){
    let monitores = ''
    
    $.each(result, function(i) {
     
        monitores +='<tr>'+
            '<td>'+
                '<div class="widget-26-job-emp-img">'+
                    '<img src="https://bootdey.com/img/Content/avatar/avatar5.png" height="60px" width="60px" alt="Company" />'+
               '</div>'+
            '</td>'+
            '<td>'+
                '<div class="widget-26-job-title">'+
                    '<a href="#">'+result[i].nombre+'</a>'+
                    //'<p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span class="text-muted time">1 days ago</span></p>'+
                '</div>'+
            '</td>'+
            '<td>'+
                '<div class="widget-26-job-info">'+
                    '<p class="type m-0">'+result[i].correo+'</p>'+
                    //'<p class="text-muted m-0">in <span class="location">London, UK</span></p>'+
                '</div>'+
            '</td>'+
            '<td>'+
                '<div class="widget-26-job-category bg-soft-base">'+
                    '<i class="indicator bg-base"></i>'+
                    '<span>'+$("#iBusqueda").val()+'</span>'+
                '</div>'+
            '</td>'+
            '<td>'+
                '<div class="widget-26-job-starred">'+
                    '<a href="#">'+
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24"'+
                            'height="24" viewBox="0 0 24 24" fill="none"'+
                            'stroke="currentColor" stroke-width="2" stroke-linecap="round"'+
                            'stroke-linejoin="round" class="feather feather-star">'+
                        '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.+02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'+
                    '</a>'+
                '</div>'+
            '</td>'+
        '</tr>'
    })

    $("#monitores tbody").append(monitores)

}