$.ajaxSetup({
        headers: {"X-Requested-With":"XMLHttpRequest"}
    });
/*function mostrarAmigos()
{
	$('#amigos').load('./getAmigos')
}
$(mostrarAmigos);*/
/*function llegadaDatos(datos){
						var amigos=JSON.parse(datos);				
						var divAmigo='';
						var friends=$('#amigos');
						//provi.empty();
						for (var i=0;i<amigos.length;i++)
						{
							divAmigo=divAmigo+"<div>";
							divAmigo=divAmigo+"<img src=\"img\\"+amigos[i]['avatar']+"\""+"/>";
							divAmigo=divAmigo+"<p>"+amigos[i]['name']+"</p>";
							divAmigo=divAmigo+"</div>";
						}
						friends.append(divAmigo);
						//document.append(friends);		
					}*/

function llegadaDatos()
{
	$('#amigos').append('<h1>Hola pajarito sin cola</h1>');
}

$(function(){
	
  // $.getJSON('./getAmigos',llegadaDatos);
  $.ajax({
           async:true,
           type: "GET",
           url:'./getAmigos',
           success:function(datos){
						var amigos=JSON.parse(datos);				
						var divAmigo='';
						var friends=$('#amigos');
						//provi.empty();
						for (var i=0;i<amigos.length;i++)
						{
							divAmigo=divAmigo+"<div>";
							divAmigo=divAmigo+"<img src=\"img\\"+amigos[i]['avatar']+"\""+"class='img-fluid'/>";
							divAmigo=divAmigo+"<a href=\"{{ url('/deleteAmigos/'"+amigos[i]['id_Usuario']+") }}\" class='btn btn-danger stretched-link col-6'>"+"Eliminar"+"</a>";
							divAmigo=divAmigo+"<a href='/deleteAmigo/'"+amigos[i]['id_usuario']+"' class='btn btn-primary stretched-link col-6'>"+amigos[i]["name"]+"</a>";
							divAmigo=divAmigo+"</div>";
							console.log("/deleteAmigo/"+amigos[i]['id_Usuario'])
						}
						friends.append(divAmigo);
						
						//document.append(friends);		
					},
           error:function(jqXHR,estado, error){
           	alert('El error es '+error);
           }
         }); 
 /* return false;*/

});
