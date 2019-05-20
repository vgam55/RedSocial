$(function(){
	$('#borrarAmigo').click(function(){
		var id=$('button[name=borrarAmigo]').val();
		alert(id);
		$.ajax({
			type:"GET",
			url:"./deleteAmigos/"+id,
			dataType: "JSON",
			
			succes:function()
			{
				alert("Contacto eliminado con exito");
			},
			error:function()
			{
				alert("Algo ha salido mal");
			}

		})
	})
});