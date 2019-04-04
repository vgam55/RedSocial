$(function(){
		  	$.ajax({
					type:'GET',
					url:'./getAmigos',
					
					//dataType. Tipo de datos que esperas. ("json","text"). Usando "json" no hace falta hacer JSON.parse
					
					success:function(datos){
						var amigos=JSON.parse(datos);				
						var divAmigo='';
						var friends=$('#amigos');
						//provi.empty();
						for (var i=0;i<amigos.length;i++)
						{
							divAmigo=divAmigo+"<div>";
							divAmigo=divAmigo+"<img src=\"img\\"+amigos[i]['avatar']+"\""+"/>";
							divAmigo=divAmigo+"<p>"+amigos[i]["name"]+"</p>";
							divAmigo=divAmigo+"</div>";
						}
						//provi.append(option);	
						friends.append(divAmigo);
						document.append(friends);		
					},
					error:function(jqXHR,estado, error)
					{
						alert("El error es: "+error);
					}
			});
		
	});