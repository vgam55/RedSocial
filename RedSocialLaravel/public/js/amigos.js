$(function(){
    $.ajax({
    	   type: "GET",
           url:'./getAmigos',
           dataType:'JSON',
           success: function (datos) {
                $('#friends').empty().append($(datos)); 
            },
           error:function(jqXHR,estado, error, data){
           	alert('El error es '+error);
           }
         }); 
});


/*function mostrarAmigos()
{
$('#amigos').load('./getAmigos')
}
*/


/*$(function(){

// $.getJSON('./getAmigos',llegadaDatos);
$.ajax({
		 async:true,
		 type: "GET",
		 url:'./getAmigos',
		 success:function(datos){

			var amigos=JSON.parse(datos);
			//window.location.href = window.location.href + "?amigos=" + amigos;
			var href="";
			var divAmigo='';
			var friends=$('#amigos');

			for (var i=0;i<amigos.length;i++)
			{
				divAmigo=divAmigo+"<div>";
				divAmigo=divAmigo+"<img src=\"img\\"+amigos[i]['avatar']+"\""+"class='img-fluid'/>";
				divAmigo=divAmigo+"<button value='"+amigos[i]['id_Usuario']+"'name='mostrarAmigo' class='btn btn-primary stretched-link sm-6 '>"+amigos[i]['name']+"</button>";
				divAmigo=divAmigo+"<button id=\"borrarAmigo\" value='"+amigos[i]['id_Usuario']+"' class='btn btn-danger stretched-link sm-6'>Borrar</button>";
			/*	href="{{ url('/deleteAmigo/"+amigos[i]['id_Usuario']+"') }}";
				divAmigo=divAmigo+"<a href=\""+href+"\" class='btn btn-danger stretched-link col-6'>"+"Eliminar"+"</a>";
				divAmigo=divAmigo+"<a href='/deleteAmigo/'"+amigos[i]['id_usuario']+"' class='btn btn-primary stretched-link col-6'>"+amigos[i]["name"]+"</a>";*/
				/*divAmigo=divAmigo+"</div>";

				console.log(href);
			}
			friends.append(divAmigo);

			//document.append(friends);
		},
		 error:function(jqXHR,estado, error){
			 alert('El error es '+error);
		 }
	 });
/* return false;*/

