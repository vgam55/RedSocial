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
							divAmigo=divAmigo+"<img src=\"img\\"+amigos[i]['avatar']+"\""+"/>";
							divAmigo=divAmigo+"<p>"+amigos[i]['name']+"</p>";
							divAmigo=divAmigo+"</div>";
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
