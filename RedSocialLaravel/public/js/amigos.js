$(function(){	
    $.ajax({
           type: "GET",
           url:'./getAmigos',
           dataType:'json',
           success: function (datos) {
           		alert("Hola pajarito sin cola");
                $('#friends').empty().append($(datos)); 
            },
           error:function(jqXHR,estado, error, data){
           	alert('El error es '+error);
           }
         }); 
});
